<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Genre;
use App\Cart;
use App\Book;
use App\Payment;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countbooks = count(Book::all());
        $countpays = count(Payment::all());
        // dd($countbooks);
        $genres = Genre::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        $books = Book::with('genre')->with('author')->with('product')->get();
        // dd($books);
        return view('home')->with(compact('genres'))->with(compact('books'))->with(compact('carts'))->with(compact('countbooks'))->with(compact('countpays'));
    }
}
