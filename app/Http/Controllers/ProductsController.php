<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

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
            'reviews' => \App\Models\Product::find($id)->allReviews,
        ]);
    }

    public function updateLend(Request $request){
        $email = $request->user()['email'];
        $date = Carbon::now()->addDays(14)->format('d-m-Y');
        $id = $request->input('id');
        DB::update('UPDATE products SET lender_email = ?, return_date = ?, status = "Lend Out" WHERE id = ?', [$email, $date, $id]);

        return view('redirections.redirect--lend');
    }

    public function updateReturn(Request $request){
        $id = $request->input('id');
        DB::update('UPDATE products SET status = "Returning", return_date = "Waiting for Accept" WHERE id = ?', [$id]);

        return view('redirections.redirect--return');
    }

    public function updateReturnAccept(Request $request){
        $id = $request->input('id');
        DB::update('UPDATE products SET lender_email = NULL, return_date = NULL, status = "Available" WHERE id = ?', [$id]);

        return view('redirections.redirect--accept');
    }
}
