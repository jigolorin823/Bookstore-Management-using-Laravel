@extends('layouts.app1')

@section('content')
<div class="panel-group">
        <div class="panel panel-info">
          <div class="panel-heading"><h1>{{ $author->name }}</h1></div>
          <?php
            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=0; };
          ?>
          <div class="panel-body card-deck">
          <?php 
                $selbooks = $books->where('author_id','=',$author->id);
                // dd($selbooks);
                $count = count($selbooks);
                // dd($orderlines);
                $hbooks = $selbooks->splice((($page-1)*4))->take(4);
            ?>
            
            @foreach($hbooks as $hbook)
            
            <div class="card" style="text-align:center">
            <a href="{{ route('book.show', ['book_id'=>$hbook->id]) }}"><img src="{{ url($hbook->image) }}" alt="Cover" width="250" height="450"></a>
              <div class="card-body">
                <h2 class="card-text">{{ $hbook->title }}</h2>
                <h6 class="card-text">{{ $hbook->author->name }}</h6>
                <h6 class="card-text">Php {{ $hbook->product->price }}</h6>
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