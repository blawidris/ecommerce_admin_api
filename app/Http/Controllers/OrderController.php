<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $orders = Order::orderBy('id', 'desc')->get();

        // dd($orders);

        $data = [
            'pageTitle' => 'Orders',
            'orders' => $orders
        ];

        return view('pages.sales.index', $data);
    }


    public function create()
    {
        $data = [
            'pageTitle' => 'Add Order'
        ];

        return view('pages.sales.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }



    public function show(string $order_code, int $id)
    {

        $customerOrder = Order::findOrFail($id);

        // dd($customerOrder->items);

        $data = [
            'pageTitle' => 'Order',
            'customerOrder' => $customerOrder
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
            'countries' => $countries
        ];

        return view('pages.sales.edit', $data);
    }



    public function update(Request $request)
    {
        dd($request);
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
