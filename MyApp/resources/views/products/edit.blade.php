@extends('layout')
@section('content')
<div class="starter-template">
    <p>Edit Product</p>
    <form action="{{ route('products.update', ['id'=>$data->id]) }}" method="POST">{{ csrf_field() }}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="">Code</label>
            <input type="text" name="code" class="form-control" value="{{$data->code}}">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{$data->description}}">
        </div>
        <input type="submit" class="btn btn-success" value="Save">
    </form>
    
    
</div>

@endsection