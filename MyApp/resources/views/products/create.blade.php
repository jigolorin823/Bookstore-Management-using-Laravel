@extends('layout')
@section('content')
<div class="starter-template">
    <p>Add Product</p>
    <form action="{{ route('products.store') }}" method="POST">{{ csrf_field() }}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Code</label>
            <input type="text" name="code" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <input type="submit" class="btn btn-success" value="Add">
    </form>
    
    
</div>

@endsection