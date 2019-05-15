<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Book;
use App\Genre;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        //$carts = Cart::groupBy('product_id')->get();
        //$carts = $carts->groupBy('product_id')->collapse();
        $books = Book::with('genre')->with('author')->with('product')->get();
        $genres = Genre::all();
        $products = Product::all();
        // dd($carts);
        return View::make('cart.index')->with(compact('carts'))->with(compact('books'))->with(compact('genres'))->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        


        Cart::create([
            'product_id' => $data['product_id'],
            'quantity' => $data['quantity']
        ]);

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        dd("adasdasdas");
        return View::make('cart.show')->with(compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        return View::make('cart.edit')->with(compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $data = $request->all();
        $cart->product_id = $data['product_id'];
        $cart->quantity = $data['quantity'];
        $cart->save();
        return redirect(route('cart.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        //dd($product_id);
        $carts = Cart::where('product_id','=',$product_id)->first();
        $carts->delete();

        return response()->json('DELETED NA', 200);
        
    }
}
