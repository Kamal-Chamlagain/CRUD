<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class mycontroller extends Controller
{
    function insert(Request $req)
    {
        $product = new product();
        $name = $req->get('pName');
        $price = $req->get('pPrice');
        $pimage = $req->file('image')->getClientOriginalName();
        $req->image->move(public_path('images'), $pimage);
        $product->pName = $name;
        $product->pPrice = $price;
        $product->pImage = $pimage;
        $product->save();
        return redirect('/');
    }
    function readData(){
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);
    }
}
