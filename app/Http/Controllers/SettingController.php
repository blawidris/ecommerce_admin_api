<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $data = [
            'pageTitle' => 'Settings',
            'user' => Auth::guard('admin')->user()
        ];
        return view('pages.settings', $data);
    }
}