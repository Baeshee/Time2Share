<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Reviews;

class ApiController extends Controller
{
    public function getAllUsers(){
        $users = User::all()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function getAllProducts(){
        $products = Product::all()->toJson(JSON_PRETTY_PRINT);
        return response($products, 200);
    }

    public function getAllReviews(){
      $reviews = Review::all()->toJson(JSON_PRETTY_PRINT);
      return response($reviews, 200);
  }

    public function getUser($id){
        if (User::where('id', $id)->exists()) {
            $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
          } else {
            return response()->json([
              "message" => "User not found"
            ], 404);
          }
    }

    public function getProduct($id){
        if (Product::where('id', $id)->exists()) {
            $product = Product::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($product, 200);
          } else {
            return response()->json([
              "message" => "Product not found"
            ], 404);
          }
    }

    public function getReview($id){
      if (Review::where('id', $id)->exists()) {
          $review = Review::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($review, 200);
        } else {
          return response()->json([
            "message" => "Review not found"
          ], 404);
        }
  }
}
