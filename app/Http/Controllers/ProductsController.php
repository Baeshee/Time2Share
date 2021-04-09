<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index(){
        return view('products.index', [
            'products' => Product::all(),
            'categories' => Category::all(),
        ]);
    }

    public function show($id){
        return view('products.show', [
            'product' => Product::find($id),
            'reviews' => Product::find($id)->allReviews,
        ]);
    }

    public function create(){
        return view('products.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request, Product $product){
        // dd($request);
        $product->name = $request->input('name');
        $product->owner_email = $email = $request->user()['email'];
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $path = $request->file('image')->store('public/images');
        $product->image = $path;
        
        try{
            $product->save();
            return redirect('/redirect-create');
        } catch (Exception $e){
            return redirect('/users/create');
        } 
    }

    public function updateLend(Request $request, $id){
        $email = $request->user()['email'];
        $date = Carbon::now()->addDays(14)->format('d-m-Y');
        $id = $id;

        DB::table('products')->where('id', $id)->update([
            'lender_email' => $email,
            'return_date' => $date,
            'status' => 'Lend Out',
        ]);

        return redirect('/redirect-lend');
    }

    public function updateReturn(Request $request, $id){
        $id = $id;

        DB::table('products')->where('id', $id)->update([
            'return_date' => 'Waiting for Accept',
            'status' => 'Returning',
        ]);

        return redirect('/redirect-return');
    }

    public function updateReturnAccept(Request $request, $id){
        $id = $id;

        DB::table('products')->where('id', $id)->update([
            'lender_email' => NULL,
            'return_date' => NULL,
            'status' => 'Available',
        ]);

        return redirect('/redirect-accept');
    }
}
