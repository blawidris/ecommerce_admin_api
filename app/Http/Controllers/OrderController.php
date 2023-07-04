<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pageTitle' => 'Orders'
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



    public function show(string $id)
    {
        $data = [
            'pageTitle' => 'Order'
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