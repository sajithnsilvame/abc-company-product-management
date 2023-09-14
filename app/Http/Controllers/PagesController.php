<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function dashboard(){
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    public function go_to_create_category_page()
    {
        if(Auth::id()) {
            return view('create_category');
        }else {
            return redirect('login');
        }

    }

    public function go_to_create_product_page()
    {
        if (Auth::id()) {
            $category = Category::all();
            return view('create_product', compact('category'));
        } else {
            return redirect('login');
        }

    }
}
