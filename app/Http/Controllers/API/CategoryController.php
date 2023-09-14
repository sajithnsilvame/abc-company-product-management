<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function storeCategory(Request $request){
        $category_data = $request->all();

        $validate = Validator::make($category_data, [
            'name' => 'required|unique:categories',

        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 404,
                'message' => 'category not created',
            ],404);
        }
        else {
            $category = Category::create($category_data);
            return response()->json([
                'status' => 'success',
                'message' => 'category created',
                'category' => $category
            ], 200);
        }
    }
}
