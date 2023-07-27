<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Settings'
        ];
        return view('pages.settings', $data);
    }
}
