<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class Product extends Controller
{
    //
    public function index()
    {
        $data = Products::all();
        return View('products',['data'=>$data]);
    }
    public function details($id)
    {
        $data =  Products::find($id);
        return View('details',['data'=>$data]);
    }
}
