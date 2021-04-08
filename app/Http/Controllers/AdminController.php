<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Review;

class AdminController extends Controller
{
    public function indexUsers(){
        return view('admin.manage--users', [
            'users' => User::all(),
        ]);
    }

    public function indexProducts(){
        return view('admin.manage--products', [
            'products' => Product::all(),
        ]);
    }

    public function indexReviews(){
        return view('admin.manage--reviews', [
            'reviews' => Review::all(),
        ]);
    }

    public function putUser(Request $request){
        $id = $request->input('id');

        if(User::find($id)->account_status == "Active"){
            DB::update('UPDATE users SET account_status = "Blocked" WHERE id = ?', [$id]);
            return redirect('/manage/users');
        } else {
            DB::update('UPDATE users SET account_status = "Active" WHERE id = ?', [$id]);
            return redirect('/manage/users');
        }
        
    }

    public function destroyProduct(Request $request){
        $id = $request->input('id');

        DB::delete('DELETE FROM products WHERE id = ?', [$id]);
        return redirect('/manage/products');
    }

    public function destroyReview(Request $request){
        $id = $request->input('id');

        DB::delete('DELETE FROM reviews WHERE id = ?', [$id]);
        return redirect('/manage/reviews');
    }
}
