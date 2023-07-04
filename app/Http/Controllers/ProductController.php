<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Products'
        ];

        return view('pages.products.index', $data);
    }


    public function create()
    {
        $data = [
            'pageTitle' => 'Add Product'
        ];

        return view('pages.products.add', $data);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        $data = [
            'pageTitle' => 'Show Product'
        ];

        return view('pages.products.view', $data);
    }


    public function edit(string $id)
    {
        $data = [
            'pageTitle' => 'Edit Product'
        ];

        return view('pages.products.edit', $data);
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