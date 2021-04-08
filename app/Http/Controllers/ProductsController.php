<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('products.index', [
            'products' => \App\Models\Product::all(),
        ]);
    }

    public function show($id){
        return view('products.show', [
            'product' => \App\Models\Product::find($id),
        ]);
    }
}
