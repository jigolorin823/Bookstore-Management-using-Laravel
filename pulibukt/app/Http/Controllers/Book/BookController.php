<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Author;
use App\Genre;
use App\Cart;
use App\Product;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::join('authors', 'authors.id', '=', 'books.author_id')
                    ->join('genres', 'genres.id', '=', 'books.genre_id')
                    ->select('books.id','books.title','books.isbn','authors.name','genres.genre','books.publisher',
                            'books.publish_date','books.description','books.image')
                    ->get();
        $genres = Genre::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        return View::make('book.index')->with(compact('books'))->with(compact('genres'))->with(compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        $genres = Genre::all();
        return View::make('book.create')->with(compact('authors'))->with(compact('genres'))->with(compact('carts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/', $image_new_name);
        $data = $request->all();
        
        Book::create([
            'title' => $data['title'],
            'isbn' => $data['isbn'],
            'publisher' => $data['publisher'],
            'author_id' => $data['author_id'],
            'genre_id' => $data['genre_id'],
            'publish_date' => $data['publish_date'],
            'description' => $data['description'],
            'image'=> 'uploads/'.$image_new_name
        ]);
        $last = Book::all()->last()->id;
        Product::create([
            'book_id' => $last,
            'quantity' => '0',
            'price' => '0'
        ]);

        return redirect(route('book.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        
        $genres = Genre::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        return View::make('book.show')->with(compact('book'))->with(compact('genres'))->with(compact('carts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $genres = Genre::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        return View::make('book.edit')->with(compact('book'))->with(compact('carts'))->with(compact('genres'))->with(compact('authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();
        

        $book->title = $data['title'];
        $book->isbn = $data['isbn'];
        $book->publisher = $data['publisher'];
        $book->publish_date = $data['publish_date'];
        $book->description = $data['description'];
        if($request->has('image')){
            $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/', $image_new_name);
        $book->image = 'uploads/'.$image_new_name;
        }
        
        $book->save();
        return redirect(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
