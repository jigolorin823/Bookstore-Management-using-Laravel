@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table id="table_id">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td>
                            <a href="{{ route('author.edit' , ['author_id' => $author->id]) }}" class="btn btn-info">Edit</a>
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
            <a href="{{ route('author.create') }}">Add Author</a>
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