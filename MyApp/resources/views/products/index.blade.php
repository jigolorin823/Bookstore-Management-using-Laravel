@extends('layout')
@section('content')
<div class="starter-template">
    <p>PRODUCTS</p>
    <p><a href="{{ route('products.create') }}" class="btn btn-success">Add</a><p>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($data as $i)
            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->code }}</td>
                <td>{{ $i->description }}</td>
                <td>
                    <a href="{{ route('products.edit',['id' => $i -> id]) }}" class="btn btn-warning">Edit</a>
                    <button onclick="$('#deleteForm').submit()" class="btn btn-danger">Delete</button>
                    <form action="{{ route('products.delete',['id' => $i -> id]) }}" id="deleteForm" method="post">
                    {{ csrf_field() }}
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
</div>

@endsection