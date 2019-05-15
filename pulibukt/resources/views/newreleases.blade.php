@extends('layouts.app1')

@section('content')
    <div class="container-fluid">
    <div class="panel-group">
        <div class="panel panel-info">
          @foreach($genres as $genre)
          <div class="panel-heading"><a href="{{ route('genre.show', ['genre_id'=>$genre->id]) }}" style="text-decoration:none"><h1>{{ $genre->genre }}</a></h1></div>
          <div class="panel-body" style="display:inline;">
            <?php 
                $selbooks = $books->where('genre_id','=',$genre->id)->take(4);
            ?>
            <div class="card-deck">
            
            @foreach($selbooks as $selbook)
            <div class="card" style="text-align:center">
              <a href="{{ route('book.show', ['book_id' => $selbook->id]) }}"><img src="{{ url($selbook->image) }}" alt="Cover" width="250" height="450"></a>
              <div class="card-body">
                <h2 class="card-text"><b>{{ $selbook->title }}</b></h2>
                <h6 class="card-text">{{ $selbook->author->name }}</h6>
                <h6 class="card-text">Php {{ $selbook->product->price }}</h6>
              </div>
              </div>
            @endforeach
            </div>
          </div>
        
          @endforeach
        </div>
      </div>
    </div>


@endsection