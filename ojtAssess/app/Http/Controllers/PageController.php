<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Book;
use App\Assignment;
use App\Author;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('status','=','1')->get();
        $assignments = Assignment::all();
        // dd($books);
        return View::make('home')->with(compact('books'))->with(compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $count = count($authors);
        return View::make('book/add')->with(compact('authors'))->with(compact('count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Assignment
        $data = $request->all();
        $validator = Validator::make($data, [
            'isbn' => 'required|unique:books'
        ]);

        if($validator->fails()){
            return redirect(route('page.create'))
                ->withErrors($validator)
                ->withInput();
        }
        // dd($data);
        $last=1;
        if(Assignment::all()->first()){
            $last = Assignment::all()->last()->assignment_id;
        }
        $last++;
        $count = count($data['author_id']);
        for($q=0; $q<$count; $q++){
            Assignment::create([
                'assignment_id' => $last,
                'author_id' => $data['author_id'][$q],
                'status' => true
            ]);
        }
        Book::create([
            'title' => $data['title'],
            'isbn' => $data['isbn'],
            'publisher' => $data['publisher'],
            'assignment_id' => $last,
            'genre' => $data['genre'],
            'date_pub' => $data['date_pub'],
            'assignment_id' => $last,
            'price' => $data['price'],
            'status' => true
        ]);
        return redirect(route('page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();

        return View::make('book.edit')->with(compact('book'))->with(compact('authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $data = $request->all();
        $book->isbn = $data['isbn'];
        $book->title = $data['title'];
        $book->genre = $data['genre'];
        $book->publisher = $data['publisher'];
        $book->date_pub = $data['date_pub'];
        $book->price = $data['price'];
        $book->save();
        return redirect(route('page.index'));
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
