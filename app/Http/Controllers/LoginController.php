<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class LoginController extends Controller
{
    //
    public function login(){
        return view('pages.login.login');
    }
    public function loginSubmit(Request $req){
        $c = Customer::where('phone',$req->phone)
                  ->where('password',md5($req->password))
                  ->first();
        if($c){
            session()->put('user',$c->phone);
            return redirect()->route('products.mycart');
        }
        return redirect()->route('login');

    }
    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
