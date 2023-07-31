<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except(['login', 'resetPassword']);
    }

    public function login()
    {



        // if($user = Auth::guard('admin')->user()){
        //     Auth::login($user);
        // }


        return  view('pages.auth.login');
    }

    public function adminLogin(Request $req)
    {

        $credentials = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($credentials->fails()) {
            return response()->json($this->sendMessage($credentials->messages()->first(), 'error', false), 400);
        }

        if (!Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password])) {
            return response()->json($this->sendMessage('The provided credentials do not match our records', 'error', false), 400);
        }

        return response()->json($this->sendMessage('You have successfully logged in!', entity: ['url' => '/admin/dashboard']), 200);
    }

    public function logout()
    {
        if (Auth::guard('admin')->logout()) {

            return redirect()->route('auth.login');
        }
    }



    public function resetPassword()
    {
        return  view('pages.auth.reset-password');
    }
}
