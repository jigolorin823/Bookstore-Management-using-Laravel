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
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
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
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
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
          <div class="panel-heading">{{ $genre->genre }}</div>
          <?php
            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=0; };
          ?>
          <div class="panel-body card-deck">
            <?php 
                $selbooks = $books->where('genre_id','=',$genre->id)->splice((($page-1)*4))->take(4);
            ?>
            
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
          <div style="text-align:center">
          <?php
            $total_pages = count($selbooks) / 4; // calculate total pages with results
            echo "<ul class=\"pagination pg-blue\" >";
            for ($i=0; $i<=$total_pages; $i++) {  // print links for all pages
                        echo "<li class=\"page-item\"><a href='1?page=".($i+1)."'";
                        echo " class='page-link'";
                        echo ">".($i+1)."</a></li>"; 
            }; 
            echo "</ul>"
            ?>
            </div>
        </div>
      </div>
      @endif
  @endauth
@endif


</div>
<!-- /.container-fluid -->
@endsection
