<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;

class ReviewsController extends Controller
{
    // public function index(){
    //     return view('admin.manage--reviews', [
    //         'reviews' => \App\Models\Review::all(),
    //     ]);
    // }

    public function create(){
        return view('reviews.create', [
            'products' => Product::all(),
        ]);
    }


    public function store(Request $request, Review $review){
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
