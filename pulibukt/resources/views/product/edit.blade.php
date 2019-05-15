@extends('layouts.app1')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card-body">
                        <form action="{{ route('product.update', ['product_id' => $product->id ]) }}" method="POST">
                        {{method_field('PUT')}}
                        @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $product->book->title }}" readonly>
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" readonly>
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $product->price }}" required>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection