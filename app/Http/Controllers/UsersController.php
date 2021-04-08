<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function index(){
        return view('users.index', [
            'users' => \App\Models\User::all(),
        ]);
    }

    public function show(){
        if(Auth::user()){
            return view('dashboard', [
                $id = auth()->user()->id,
                'user' => \App\Models\User::find($id),
                'products' => \App\Models\User::find($id)->allOwnedProducts,
            ]);
        }
        return redirect('/');
    }

    public function allOwnedProducts($id){
        return view('users.products', [
            'products' => \App\Models\User::find($id)->allOwnedProducts,
        ]);
    }
}
