<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index(){
        $products=Product::get();
        return view("products.index",compact("products"));
    }
    public function create(){
        return view("products.create");
    }
    public function store(Request $request){
        $request->validate([
            "name"=>"required",
            "price"=>"required|numeric",
            "quantity"=>"required"
        ]);
        Product::create($request->all());
        return redirect()->route("products.index");
    }
    public function edit(string $id){
        $product=Product::find($id);
        return view('products.create', compact('product'));
    }
    public function update(Request $request){
        $product = Product::findOrFail($request->input('id'));
        $request->validate([
            "name"=>"required",
            "price"=>"required|numeric",
            "quantity"=>"required"
        ]);
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->quantity=$request->input('quantity');
        $product->save();
        return redirect()->route("products.index");
    }
    public function delete(string $id){
        Product::destroy($id);
        return redirect()->route("products.index");
    }
    public function show(string $id){
        $product = Product::findOrFail($id);
        return view("products.show",compact('product'));
    }
}
