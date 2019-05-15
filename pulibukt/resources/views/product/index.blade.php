@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table id="table_id">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>title</td>
                        <td>quantity</td>
                        <td>price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->book->title }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$product->id}}">Stock-in</button>
                            <a href="{{ route('product.edit' , ['product_id' => $product->id]) }}" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                    <div class="modal fade bd-example-modal-sm" id="modal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Stock-in</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('product.update', ['product_id' => $product->id ]) }}" method="POST">
                                {{method_field('PUT')}}
                                @csrf
                                    <div class="form-group">
                                        <label>Product: {{ $product->book->title }}</label> <br>
                                        <label>Price: {{ $product->price }}</label> <br>
                                        <label>Stock-in Quantity: </label>
                                        <input type="text" class="form-control" name="addquantity" required>
                                    </div>
                                    <input type="submit" class="btn btn-success" name="submit" style="float:right;">
                                </form>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>

            </table>
            
            

        </div>
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