@extends('layouts.app1')

@section('content')
    <div class="container">
        <table style="width:100%;">
            <tr>
                <td rowspan="7" colspan="2"><img src="{{ url($book->image) }}" alt="Cover" width="250" height="450"></td>
                <td><label >Title:</label></td>
                <td colspan="3"><h1><b>{{ $book->title }}</b></h1></td>
            </tr>
            <tr>
            <td><label >ISBN:</label></td>
                <td colspan="3"><h5>{{ $book->isbn }}</h5></td>
            </tr>
            <tr>
            <td><label >Author/Publisher:</label></td>
                <td><h5><a href="{{route('author.show',['author_id'=>$book->author->id])}}">{{ $book->author->name }}</a></h5></td>
                <td><h5>{{ $book->publisher }} {{ $book->publish_date }}</h5></td>
            </tr>
            <tr>
            <td><label >Genre:</label></td>
                <td colspan="3"><h5>{{ $book->genre->genre }}</h5></td>
            </tr>
            <tr>
            <td><label >Description:</label></td>
                <td colspan="5""><h5>{{ $book->description }}</h5></td>
            </tr>
            <tr>
            <td><label >Price:</label></td>
                <td colspan="3"><h5>Php {{ $book->product->price }}</h5></td>
            </tr>
            <tr>
            <form action="{{ route('cart.store') }}" method="POST">
            @csrf
                
                @if (Route::has('login'))
                @auth
                @if(Auth::user()->role_id===2)
                <td>
                    <div class="form-group col-md-12">
                    @if ($book->product->quantity <> 0)
                        <input type="text" class="form-control" placeholder="Quantity" name="quantity">
                        </div>
                </td>
                <input type="hidden" name="product_id" value="{{ $book->id }}">
                <td><input type="submit" name="submit" class="btn btn-success"></td>
                    @else
                        <label for="">No Stocks Available</label>
                        </div>
                </td>
                <input type="hidden" name="product_id" value="{{ $book->id }}">
                <td><input type="submit" name="submit" class="btn btn-success" disabled></td>
                    @endif
                   
                @else
                <td><a href="{{ route('book.index') }}" class="btn btn-success">Close Details</a></td>
                @endif
                @endauth
                @endif
                
                </form>
            </tr>
        </table>    


    </div>

    
@endsection

@section('script')

<script>
</script>
@endsection