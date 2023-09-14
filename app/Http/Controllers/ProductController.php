<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function store(Request $request){

        if(Auth::id()){
            $product = new Product;

            $product->title = $request->title;
            $product->product_category = $request->category;

            $product->save();
            return back()->with('success', 'Product created successfully');
        }
        else{
            return redirect('login');
        }

    }

    public function edit($id){
        if (Auth::id()) {
            $category = Category::all();
            $product = Product::find($id);

            return view('edit_product', compact('product', 'category'));
        } else {
            return redirect('login');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::id()) {
            $product = Product::find($id);

            $product->title = $request->title;
            $product->product_category = $request->category;

            $product->save();
            return back()->with('success', 'Product updated successfully');
        } else {
            return redirect('login');
        }

    }

    public function delete($id){
        
        $product = Product::find($id);
        $product->delete();

        return back();

    }


}
