<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Author;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $count = count($data['author_id']);
        $assignments = Assignment::where([['assignment_id','=',$data['assignment_id']],['status','=','1']])->pluck('author_id')->toArray();
        // dd($assignments);
        for($q=0; $q<$count; $q++){
            if(!(in_array($data['author_id'][$q], $assignments))){
                Assignment::create([
                    'assignment_id' => $data['assignment_id'],
                    'author_id' => $data['author_id'][$q],
                    'status'=> 1
                ]);
            }
        }
        $book_id = $data['book_id'];
        return redirect(route('book.show', ['book_id' => $book_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit($book_id)
    {
        $book = Book::findOrFail($book_id);
        $authors = Author::all();
        return View::make('author.add')->with(compact('authors'))->with(compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
    public function removeAuthor($id, $book_id){
        $assignment = Assignment::findOrFail($id);
        // dd($book_id);
        $assignment->status = false;
        $assignment->save();
        return redirect(route('book.show', ['book_id'=>$book_id]));
    }
}
