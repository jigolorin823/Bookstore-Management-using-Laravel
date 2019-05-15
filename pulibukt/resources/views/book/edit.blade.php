@extends('layouts.app1')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book</div>
                    <div class="card-body">
                        <form action="{{ route('book.update', ['book_id' => $book->id ]) }}" method="POST" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $book->title }}" required>
                                <label>ISBN</label>
                                <input type="text" class="form-control" name="isbn" value="{{ $book->isbn }}" required>
                                <label>Author</label>
                                <select name="author_id" class="form-control">
                                    @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                                <label>Genre</label>
                                <select name="genre_id" class="form-control">
                                    @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                                    @endforeach
                                </select>
                                <label>Publisher</label>
                                <input type="text" class="form-control" name="publisher" value="{{ $book->publisher }}" required>
                                <label>Publish Date</label>
                                <input type="text" class="form-control" name="publish_date" value="{{ $book->publish_date }}" required>
                                <label>Description</label>
                                <input type="text" class="form-control" name="description" value="{{ $book->description }}" required>
                                <label>Image</label>
                                <input type="file" name="image" value="{{ $book->image }}">
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection