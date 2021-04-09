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

    public function updateUser(Request $request, $id){
        $id = $id;

        if(User::find($id)->account_status == "Active"){
            DB::table('users')->where('id', $id)->update([
                'account_status' => 'Blocked',
            ]);

            return redirect('/manage/users');
        } else {
            DB::table('users')->where('id', $id)->update([
                'account_status' => 'Active',
            ]);

            return redirect('/manage/users');
        }
        
    }

    public function destroyProduct(Request $request, $id){
        $id = $id;

        DB::table('products')->where('id', $id)->delete();

        return redirect('/manage/products');
    }

    public function destroyReview(Request $request, $id){
        $id = $id;

        DB::table('reviews')->where('id', $id)->delete();

        return redirect('/manage/reviews');
    }
}
