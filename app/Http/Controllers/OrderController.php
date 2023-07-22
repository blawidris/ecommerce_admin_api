<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
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

        $orderItems = OrderItem::where('order_id', $id)->get();

        // dd($customerOrder->items);

        $data = [
            'pageTitle' => 'Order',
            'customerOrder' => $customerOrder,
            'orderItems' => $orderItems
        ];

        return view('pages.sales.view', $data);
    }



    public function edit(string $id)
    {
        $data = [
            'pageTitle' => 'Edit Order'
        ];

        return view('pages.sales.edit', $data);
    }



    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
