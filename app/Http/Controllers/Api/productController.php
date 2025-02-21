<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return response()->json([
            'products' => $products
        ],200);
    }

  


    public function store(Request $request)
    {
        $validater = Validator::make($request->all(), [
            "name"=>"required",
            "price"=>"required|numeric",
            "quantity"=>"required"
        ]);

        if($validater->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validater->errors()
            ], 401);
        }
  
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return response()->json([
            'message' => "Product Created successfully!",
            'product' => $product
        ], 200);
    }

   
    public function show(Product $product)
    {
        return response()->json([
            'product' => $product
        ], 200);
    }

    public function update(Request $request, Product $product)
    {
        $validater = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'price' => 'required',
            'unit'=>'required|max:10'
        ]);

        if($validater->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validater->errors()
            ], 401);
        }
  
        $product->name = $request->name;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->save();

        return response()->json([
            'message' => "Product Updated successfully!",
            'product' => $product
        ], 200);
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => "Product Deleted successfully!",
            'product' => $product
        ], 200);
    }
}
