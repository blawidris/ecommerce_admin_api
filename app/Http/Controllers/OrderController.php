<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
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
            'pageTitle' => 'Add Order',
            'invoice' => $invoice,
            'products' => $products,
            'user' => Auth::guard('admin')->user()
        ];

        return view('pages.sales.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order_code = $$request->invoice;
        $total_amount = 0;
        $subtotal = 0;

        $orderIds = $request->product;

        // calculate subtotal
        foreach ($orderIds as $orderItem) {

            $prod = Product::findorFail('id', $orderItem);

            $subtotal += $prod->price * 1;
        }


    }



    public function show(string $order_code, int $id)
    {

        $customerOrder = Order::findOrFail($id);

        // dd($customerOrder->items);

        $data = [
            'pageTitle' => 'Order',
            'customerOrder' => $customerOrder,
            'user' => Auth::guard('admin')->user()
        ];

        return view('pages.sales.view', $data);
    }



    public function edit(string $order_code, int $id)
    {

        $orderId = $id;

        $order = Order::findOrFail($id);
        $products = Product::orderBy('created_at', 'desc')->get();
        $countries = Country::orderBy('code', 'asc')->get();

        // dd($order->items());

        $data = [
            'pageTitle' => 'Edit Order',
            'products' => $products,
            'order' => $order,
            'orderItems' => $order->items,
            'countries' => $countries,
            'user' => Auth::guard('admin')->user()
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
