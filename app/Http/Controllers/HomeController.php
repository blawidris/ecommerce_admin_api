<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $data = [
            'pageTitle' => 'Dashboard'
        ];

        return view('pages.dashboard', $data);
    }



    public function categories()
    {

        $data = [
            'pageTitle' => 'Categories'
        ];

        return view('pages.categories.index', $data);
    }

    public function categoryView()
    {

        $data = [
            'pageTitle' => 'Category'
        ];

        return view('pages.categories.view', $data);
    }

    public function addCategory()
    {
        $data = [
            'pageTitle' => 'Add Category'
        ];

        return view('pages.categories.add', $data);
    }


    public function editCategory()
    {
        $data = [
            'pageTitle' => 'Edit Category'
        ];

        return view('pages.categories.edit', $data);
    }


    public function login()
    {
        return  view('pages.auth.login');
    }

    public function resetPassword()
    {
        return  view('pages.auth.reset-password');
    }

    public function customers()
    {

        $data = [
            'pageTitle' => 'Customers'
        ];

        return view('pages.customers.index', $data);
    }

    public function customerView()
    {

        $data = [
            'pageTitle' => 'Customers'
        ];

        return view('pages.customers.index', $data);
    }

    public function settings()
    {

        $data = [
            'pageTitle' => 'Settings'
        ];

        return view('pages.settings', $data);
    }
}