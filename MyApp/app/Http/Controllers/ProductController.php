<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('products/index', ['data' => $products]);
    }
    public function create(){
        return view('products/create');
    }
    public function store(Request $request){
        $data = $request->all();

        Product::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'description' => $data['description'],
        ]);

        return redirect()->route('products');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('products/edit', ['data'=>$product]);
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products');
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        
        return redirect()->route('products');
    }
}
