<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipping;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {

        $orders = Order::orderBy('id', 'desc')->get();

        // dd($orders);

        $data = [
            'pageTitle' => 'Orders',
            'orders' => $orders,
            'user' => Auth::guard('admin')->user()
        ];

        return view('pages.sales.index', $data);
    }


    public function create()
    {

        $invoice = $this->random_number(5);
        $products = Product::all();

        $data = [
            'pageTitle' => 'Create New Order',
            'invoice' => $invoice,
            'products' => $products,
            'user' => Auth::guard('admin')->user(),
            'customers' => Customers::orderBy('id', 'desc')->get()
        ];

        return view('pages.sales.add', $data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $customerId = $request->customer_id;
        $payment_method = $request->payment_method;
        $shipping_method = $request->shipping_method;
        $order_code =  $request->invoice;
        $productIds =  $request->product;


        $billingData = [
            'address1' => $request->billing_address_1,
            'address2' => $request->billing_address_2,
            'city' => $request->billing_city,
            'state' => $request->billing_state,
            'zipcode' => $request->billing_postcode,
            'country_code' => "BIH",
        ];


        // store shipping
        if ($request->has('use_same_address')) {

            $shippingData = [
                'address' => $request->billing_address_1,
                'city' => $request->billing_city,
                'state' => $request->billing_state,
                'zipcode' => $request->billing_postcode,
                'country_code' => 'BIH',
                'shipping_method' => $shipping_method,
                'track_code' => $this->random_number(10),
                'status' => 'pending',
                'customer_id' => $customerId,
            ];
        } else {

            $shippingData = [
                'customer_id' => $customerId,
                'address1' => $request->shippping_address_1,
                'address2' => $request->shippping_address_2,
                'city' => $request->shippping_city,
                'state' => $request->shippping_state,
                'zipcode' => $request->shippping_postcode,
                'country_code' => $request->shippping_country,
                'shipping_method' => $shipping_method,
                'track_code' => $this->random_number(10),
                'status' => 'pending'
            ];
        }


        try {

            $storeShippingData = Shipping::create($shippingData);

            // fetch product
            $orderItems = [];
            $total_price = 0;

            foreach ($productIds as $prodId) {

                $item = Product::findOrFail($prodId);

                // sum total price
                $itemPrice = $item->price * 1;
                $total_price += $itemPrice;

                // parse orderItem data
                $orderItems[$prodId] = [
                    'product_id' => $prodId,
                    'unit_price' => $item->price,
                    'quantity' => 1,
                ];
            }


            // add payment data to db

            $payment = Payment::create(
                [
                    'payment_method' => $payment_method,
                    'created_by' => $customerId,
                    'amount' => $total_price,
                    'status' => 'pending'
                ]
            );


            // Save order
            $order = [
                'order_code' => $order_code,
                'customer_id' => $customerId,
                'shipping_id' => $storeShippingData->id,
                'total_price' => $total_price,
                'payment_id' => $payment->id,
                "updated_by" => auth()->user()->id,
                'status' => 0
            ];

            $storeOrder = Order::create($order); #store data to db

            #store order items
            $storeOrderId = $storeOrder->id;

            $updatedOrderItems = array_map(function ($item) use ($storeOrderId) {
                $item['order_id'] = $storeOrderId;

                return $item;
            }, $orderItems);


            // dd($updatedOrderItems);

            OrderItem::insert($updatedOrderItems);



            # update shipping address order id
            Shipping::where('id', $storeShippingData->id)->update(['order_id' => $storeOrderId]);


            return response()->json(['message' => 'Order product has been created', 'success' => true, 'type' => 'success']);
        } catch (Exception $err) {
            return response()->json(['message' => 'An error occurred. Please try again later.', 'type' => 'error', 'success' => false], 400);
        }
    }



    public function show(Order $order, $id)
    {


        $data = [
            'pageTitle' => 'Order',
            'customerOrder' => $order->findOrFail($id),
            'user' => Auth::guard('admin')->user()
        ];

        return view('pages.sales.view', $data);
    }



    public function edit(Order $order, $id)
    {


        $order = $order->findOrFail($id);
        $products = Product::orderBy('created_at', 'desc')->get();
        $countries = Country::orderBy('code', 'asc')->get();

        // dd($order->items());

        $data = [
            'pageTitle' => 'Edit Order',
            'products' => $products,
            'order' => $order,
            'orderItems' => $order->items,
            'countries' => $countries,
            'user' => Auth::guard('admin')->user(),
            'customers' => Customers::orderBy('id', 'desc')->get()

        ];

        return view('pages.sales.edit', $data);
    }



    public function update(Request $request)
    {
        $orderId = $request->id;
        $order = Order::findOrFail($orderId);

        // sub total
        $subtotal = 0;

        // existing order items
        $existingOrderItems = $order->items;

        dd($existingOrderItems);

        // has old and new order product ids
        $newOrderItems = $request->product;

        // store all items
        $orders =  [];

        foreach ($newOrderItems as $orderItem) {

            if (in_array($orderItem, $existingOrderItems->product_id)) {

                dd('found');
            } else {
            }
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->id;

        if (!$id) {
            return response()->json($this->sendMessage('Order ID not found', 'error', false), 400);
        }

        if (!Order::where('id', $id)->delete()) {
            return response()->json($this->sendMessage('Sorry, looks like there are some errors detected, please try again', 'error', false));
        }

        return response()->json($this->sendMessage('Order Deleted successfully', 'success', true), 200);
    }
}
