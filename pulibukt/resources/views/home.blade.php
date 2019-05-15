@extends('layouts.app1')

@section('content')
<div class="container-fluid">
@if (Route::has('login'))
  @auth
      @if(Auth::user()->role_id<>2)
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-book"></i>
                </div>
                <div class="mr-5">{{$countbooks}} Books</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{route('book.index')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">{{$countpays}} Transactions</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{route('payment.index')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          
        </div>
      @else
      <div class="panel-group">
        <div class="panel panel-info">
          @foreach($genres as $genre)
          <div class="panel-heading"><a href="{{ route('genre.show', ['genre_id'=>$genre->id]) }}" style="text-decoration:none"><h1>{{ $genre->genre }}</a></h1></div>
          <div class="panel-body" style="display:inline;">
            <?php 
                // dd($books);
                $selbooks = $books->where('genre_id','=',$genre->id)->take(4);
                // @if($selbooks->product)
                // $selbooks = $selbooks->where('product->quantity','>', 8);
            ?>
            <div class="card-deck">
            
            
            
            @foreach($selbooks as $selbook)
            <div class="card" style="text-align:center">
            <a href="{{ route('book.show', ['book_id'=>$selbook->id]) }}"><img src="{{ url($selbook->image) }}" alt="Cover" width="250" height="450"></a>
              <div class="card-body">
                <h2 class="card-text">{{ $selbook->title }}</h2>
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
      @endif
  @endauth
@else
  <div class="container">
    adhasjkdhajksdh
  </div>
@endif


</div>
<!-- /.container-fluid -->
@endsection
