<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
    function updateordelete(Request $req){
        $id=$req->get('pId');
        $name=$req->get('pName');
        $price=$req->get('pPrice');
        
        if($req->get('update')=='Update'){
            return view('updateView',['pid'=>$id,'pname'=>$name,'pprice'=>$price]);
        }
        else{
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');
    }
    
    function update(Request $req){
        $id = $req->get('id');
        $name = $req->get('pName');
        $price = $req->get('pPrice');
        $product = product::find($id);
        $product->pName = $name;
        $product->pPrice = $price;
        $product->save();
        return redirect('/');
    }
}
