@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table id="table_id">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Title</td>
                        <td>ISBN</td>
                        <td>Author</td>
                        <td>Genre</td>
                        <td>Publisher</td>
                        <td>Publish Date</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->publish_date }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->image }}</td>
                        <td>
                            <a href="{{ route('book.show' , ['book_id' => $book->id]) }}" class="btn btn-info">Details</a>
                            <a href="{{ route('book.edit' , ['book_id' => $book->id]) }}" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            

        </div>
        <select class="selectpicker" data-live-search="true">
            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
            <option data-tokens="mustard">Burger, Shake and a Smile</option>
            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
        </select>


        <button class="btn btn-success" >
            <i class="fa fa-plus"></i>
            <a href="{{ route('book.create') }}">Add Book</a>
        </button>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
           $('#table_id').DataTable();
           $('.selectpicker').selectpicker();
        });
    </script>
@endsection