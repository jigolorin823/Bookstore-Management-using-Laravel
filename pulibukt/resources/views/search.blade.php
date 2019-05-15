@extends('layouts.app1')

@section('content')
<div class="panel-group">
        <div class="panel panel-info">
          <div class="panel-heading"><h1>Results for: "{{$search}}"</h1></div>
          <?php
            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=0; };
          ?>
          <div class="panel-body card-deck">
          <?php 
                $count = count($books);
                // dd($orderlines);
                $books2 = $books->splice((($page-1)*4))->take(4);
            ?>
            
            @foreach($books2 as $book)
            <?php 
            
                $product = $products->where('id','=',$book->id)->first();
            ?>
            <div class="card" style="text-align:center">
            
            <a href="{{ route('book.show', ['book_id'=>$product->id]) }}"><img src="{{ url($product->book->image) }}" alt="Cover" width="250" height="450"></a>
              <div class="card-body">
                <h2 class="card-text">{{ $product->book->title }}</h2>
                <h6 class="card-text">{{ $product->book->author->name }}</h6>
                <h6 class="card-text">Php {{ $product->price }}</h6>
              </div>
              </div>
            
            @endforeach
            </div>
          </div>
          <div style="text-align:center">
          <?php
            $total_pages = $count / 4; // calculate total pages with results
            // dd($count);
            echo "<ul class=\"pagination pg-blue\" >";
            for ($i=0; $i<=$total_pages; $i++) {  // print links for all pages
                        echo "<li class=\"page-item\"><a href='best-sellers?page=".($i+1)."'";
                        echo " class='page-link'";
                        echo ">".($i+1)."</a></li>"; 
            }; 
            echo "</ul>"
            ?>
            </div>
        </div>
      </div>


@endsection