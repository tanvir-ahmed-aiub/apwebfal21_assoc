<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductAPIController extends Controller
{
    //
    public function list(){
        $products = Product::all();
        return $products;
    }
    public function add(Request $req){
        $pr = new Product();
        //$pr->id = $req->id;
        $pr->name = $req->name;
        $pr->price = $req->price;
        $pr->image = $req->image;
        if($pr->save()) return "Successful";
    }

}

