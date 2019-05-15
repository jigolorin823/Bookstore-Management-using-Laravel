<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Genre;
use App\Book;
use App\Cart;
use App\Product;
use App\Orderline;

class PageController extends Controller
{
    public function newreleases(){
        $genres = Genre::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        $books = Book::with('genre')->with('author')->with('product')->orderBy('id','desc')->get();
        return view('newreleases')->with(compact('genres'))->with(compact('books'))->with(compact('carts'));
    }
    public function search(Request $request){
        $genres = Genre::all();
        $search = $request['search'];
        // dd($search);
        $products = Product::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        $books = Book::with('genre')->with('author')->with('product')->orderBy('id','desc')->where('title','like','%'.$search.'%')->get();
        return view('search')->with(compact('genres'))->with(compact('books'))->with(compact('carts'))->with(compact('search'))->with(compact('products'));
    }
    public function bestsellers(){
        $genres = Genre::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        $orderlines = DB::table('orderlines')->select(DB::raw('count(*) as count'),'product_id')->groupBy('product_id')->orderBy('count','DESC')->get();
        // $orderlines = DB::table('orderlines')->groupBy('product_id')->select(DB::raw('count(*) as count'),'product_id')->orderBy('count','DESC')->get();
        $products = Product::all();
        // dd($orderlines);
        return view('bestsellers')->with(compact('genres'))->with(compact('carts'))->with(compact('orderlines'))->with(compact('products'));
    }
}
