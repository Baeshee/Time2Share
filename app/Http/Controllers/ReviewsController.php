<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function create(){
        return view('reviews.create', [
            'products' => \App\Models\Product::all(),
        ]);
    }


    public function store(Request $request, \App\Models\Review $review){
        $review->product_name = $request->input('product_name');
        $review->lender_email = $email = $request->user()['email'];
        $review->review_content = $request->input('review_content');
        
        try{
            $review->save();
            return redirect('/');
        } catch (Exception $e){
            return redirect('/review/create');
        } 
    }
}
