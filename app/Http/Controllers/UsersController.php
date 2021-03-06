<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Product;

class UsersController extends Controller
{
    // public function index(){
    //     return view('admin.manage--users', [
    //         'users' => \App\Models\User::all(),
    //     ]);
    // }

    public function show(){
        if(Auth::user()){
            return view('dashboard', [
                $id = auth()->user()->id,
                'user' => User::find($id),
                'products' => User::find($id)->allOwnedProducts,
                'lend_products' => User::find($id)->allLendProducts,
            ]);
        }
        return redirect('/');
    }

    // public function allOwnedProducts($id){
    //     return view('users.products', [
    //         'products' => \App\Models\User::find($id)->allOwnedProducts,
    //     ]);
    // }
}
