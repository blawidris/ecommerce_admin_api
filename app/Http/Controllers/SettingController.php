<?php

namespace App\Http\Controllers;

use App\Http\Requests\Config\LocalRequest;
// use App\Http\Requests\Config\StoresRequests;
use App\Models\Setting;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {


        $store = Setting::where('tab', 1)->get()->first();
        $local = Setting::where('tab', 2)->get()->first();

        // dd($local);

        $data = [
            'pageTitle' => 'Settings',
            'user' => Auth::guard('admin')->user(),
            'store' => json_decode($store->value),
            'local' => json_decode($local->value),
        ];
        return view('pages.settings', $data);
    }



    public function store(Request $req)
    {


        $validator = Validator::make($req->all(), [
            'store_name' => ['required', 'string'],
            'store_owner' => ['required', 'string'],
            'store_address' => ['required', 'string'],
            'store_email' => ['required', 'email'],
            'store_phone' => ['required', new PhoneNumber],
            'meta_title' => ['required', 'string']
        ]);


        if ($validator->fails()) {
            return response()->json($this->sendMessage($validator->messages()->first(), 'error', false), 401);
        }

        $values = [
            'store_name' => $req->store_name,
            'store_owner' => $req->store_owner,
            'store_address' => $req->store_address,
            'store_email' => $req->store_email,
            'store_phone' => $req->store_phone,
            'store_geocode' => $req->store_geocode,
            'meta_title' => $req->meta_title,
            'meta_description' => $req->meta_description,
            'meta_keywords' => $req->meta_keywords,
        ];

        $data = [
            'tab' => $req->tab,
            'name' => 'store',
            'value' => json_encode($values)
        ];


        if (!Setting::updateOrCreate(['tab' => $data['tab']], $data)) {

            return response()->json($this->sendMessage('An error occured, please try again', 'error', false), 401);
        }


        return response()->json($this->sendMessage('Store data save successfully'), 200);
    }


    public function storeLocalization(LocalRequest $request)
    {

        $values = [
            'country' => $request->country,
            'language' => $request->language,
            'currency' => $request->currency,
            'length' => $request->length,
            'weight' => $request->weight
        ];

        $data = [
            'tab' => $request->tab,
            'name' => 'store',
            'value' => json_encode($values)
        ];


        if (!Setting::updateOrCreate(['tab' => $data['tab']], $data)) {

            return response()->json($this->sendMessage('An error occured, please try again', 'error', false), 401);
        }


        return response()->json($this->sendMessage('Store data save successfully'), 200);
    }


    // public function storeProduct(Request $request)
    // {

    //     $values = [
    //         'country' => $request->country,
    //         'customer_activity' => $request->customer_activity,
    //         'currency' => $request->currency,
    //         'length' => $request->length,
    //         'weight' => $request->weight
    //     ];

    //     $data = [
    //         'tab' => $customer->tab,
    //         'name' => 'store',
    //         'value' => json_encode($values)
    //     ];


    //     if ($local = Setting::findOrFail($request->tab)) {
    //         $local->update($data);

    //         return response()->json($this->sendMessage('Localization data updated successfully'), 200);
    //     }


    //     if (!Setting::create($data)) {

    //         return response()->json($this->sendMessage('An error occured, please try again', 'error', false), 400);
    //     }


    //     return response()->json($this->sendMessage('Store data save successfully'), 200);
    // }

    // public function storeCustomer(CustomerSRequest $customer)
    // {

    //     $values = [

    //         'online_customer' => $customer->nline_customer,
    //         'language' => $customer->language,
    //         'currency' => $customer->currency,
    //         'length' => $customer->length,
    //         'weight' => $customer->weight
    //     ];

    //     $data = [
    //         'tab' => $customer->tab,
    //         'name' => 'store',
    //         'value' => json_encode($values)
    //     ];


    //     if ($local = Setting::findOrFail($customer->tab)) {
    //         $local->update($data);

    //         return response()->json($this->sendMessage('Localization data updated successfully'), 200);
    //     }


    //     if (!Setting::create($data)) {

    //         return response()->json($this->sendMessage('An error occured, please try again', 'error', false), 400);
    //     }


    //     return response()->json($this->sendMessage('Store data save successfully'), 200);
    // }
}