<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CustomerAddresses;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {


        $customers = Cache::remember('customers', 600, function () {
            return Customers::with('user')->orderBy('created_at', 'desc')->get();
        });

        $countries = Country::all();




        $data = [
            'pageTitle' => 'Customers',
            'customers' => $customers,
            'countries' => $countries,
            'user' => Auth::guard('admin')->user()
        ];

        return view('pages.customers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|unique:users',
            'address1' => 'required',
            'city' => 'required',
            'country' => 'required',
            'state' => 'required',
            'postcode' => 'required'
        ]);


        // validate form
        if ($validator->failed()) {
            return response()->json($this->sendMessage($validator->messages()->first(), 'error', false), 400);
        }


        $userTable = [
            'email' => $request->email,
            'password' => Hash::make($request->f_name . '1234'),
            'email_verified_at' => now(),
            'remember_token' => $this->random_number(4),
        ];

        // notify user to verify account


        $createUser = User::create($userTable);

        if ($createUser) {

            $customerData = [
                'first_name' => $request->f_name,
                'last_name' => $request->l_name,
                'phone' => $request->phone,
                'status' => 0,
                'user_id' => $createUser->id
            ];


            if (!$createCustomer = Customers::create($customerData)) {

                return response()->json($this->sendMessage('Sorry, an error occured. \n Please try again'), 400);
            }


            $customerAdData = [
                'address1' => $request->address1,
                'city' => $request->city,
                'state' => $request->state,
                'zipcode' => $request->postcode,
                'country_code' => $request->country,
                'customer_id' => $createCustomer->id,
                'is_shipping' => $request->is_shipping,
                'created_by' => Auth::guard('admin')->id()
            ];



            CustomerAddresses::create($customerAdData);

            return response()->json($this->sendMessage('Customer account created successfully'), 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customerCache = Cache::get('data-' . $id);

        $customer = null;

        $countries = Cache::remember('countries', 6000, function () {
            return Country::all();
        });

        if ($customerCache !== null) {
            $customer = $customerCache;
        }

        $customer = Cache::remember('data-' . $id, 6000, function () use ($id) {
            return Customers::with('customerAddress')->with('orders')->findOrFail($id);
        });

        $data = [
            'pageTitle' => 'Customer',
            'customer' => $customer,
            'countries' => $countries,
            'user' => Auth::guard('admin')->user()
        ];

        return view('pages.customers.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email'
        ]);


        if ($validator->fails()) {
            return response()->json($this->sendMessage($validator->messages()->first(), 'error', false), 400);
        }


        $customerData = Customers::where('id', $request->customer_id)->update([
            'first_name' => $request->f_name,
            'last_name' => $request->l_name,
            'updated_by' => Auth::guard('admin')->id()
        ]);


        if (!$customerData) {
            return response()->json($this->sendMessage('Sorry, an error occured. Please try again later', 'error', false), 400);
        }

        $customer = Customers::findOrFail($request->customer_id);


        $userC = User::findOrFail($customer->user_id);

        if ($userC->email !== $request->email) {

            $userData = [
                'email' => $request->email
            ];

            User::where('id', $customerData->user_id)->update($userData);
        }


        return response()->json($this->sendMessage('Provided details has been updated'), 200);
    }

    public function changePhone(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'customer_id' => 'required',
                'phone' => 'required'
            ]
        );

        if($validator->fails()){
            return response()->json($this->sendMessage($validator->messages()->first(), 'error', false), 400);
        }


        $updatePhone = Customers::where('id', $req->customer_id)->update([
            'phone' => $req->phone
        ]);

        if(!$updatePhone){
            return response()->json($this->sendMessage('An error occur while updating phone, please try again', 'error', false), 400);
        }

        return response()->json($this->sendMessage('User phone number successfully updated'), 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        if ($req->id) {

            $customerId = $req->id;

            $customer =  Customers::findorFail($customerId);

            $user_id = $customer->id;

            if (!Customers::where('id', $customerId)->delete()) {
                return response()->json($this->sendMessage('Sorry, an error occured', 'error', false), 400);
            }

            User::where('id', $user_id)->delete();

            return response()->json($this->sendMessage('Customer account deleted successfully'), 200);
        }
    }
}