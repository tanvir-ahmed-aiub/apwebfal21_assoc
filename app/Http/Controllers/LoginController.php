<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Smalot\PdfParser\Parser;

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
    public function test_file(){

        return view('testfile');
    }
    public function upload(Request $request){
        $request->validate(
            [
                'image'=> 'required|mimes:jpg,png,pdf,docx,xlsx,xlx|max:2048'
            ]
        );
        if($request->hasFile('image')){
            
            return $request->file('image')->getClientOriginalName();
            $name = time()."_".$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('uploads',$name,'public');
            return "Upload successfull";
        }
        return "No file";
    }
}
