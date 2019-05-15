@extends('layouts.app1')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Author</div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>Product</label>
                                <select name="product_id" class="form-control">
                                    @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection