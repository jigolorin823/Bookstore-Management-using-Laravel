@extends('layouts.app1')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Genre</div>
                    <div class="card-body">
                        <form action="{{ route('genre.update', ['genre_id' => $genre->id ]) }}" method="POST">
                        {{method_field('PUT')}}
                        @csrf
                            <div class="form-group">
                                <label>Genre</label>
                                <input type="text" class="form-control" name="genre" value="{{ $genre->genre }}" required>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection