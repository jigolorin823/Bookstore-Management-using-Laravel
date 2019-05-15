@extends('layouts.app1')

@section('content')
    <div class="container">
    @if(count($carts)===0)
        <div style="text-align:center">
        <br><br><br><br>
            <a href="{{ route('bestsellers') }}" class="btn btn-info">Add Products to Cart</a>
        </div>
    @else
        <form action="{{ route('orderline.store') }}" method="POST">
            <div class="table-responsive">
                <table id="table_id">
                
                @csrf
                    <tbody>
                    <?php $cnt =0;$total=0; ?>
                    @foreach($carts as $cart)
                        <?php
                            
                            $book = $books->where('id','=',$cart->product_id)->first();
                        ?>
                        <tr>
                            <table style="width:100%;">
                                <tr>
                                    <td rowspan="8" colspan="2"><a href="{{ route('book.show', ['book_id'=>$book->id]) }}"><img src="{{ url($book->image) }}" alt="Cover" width="250" height="450"></a></td>
                                    <td><label >Title:</label></td>
                                    <td colspan="3"><h1><b>{{ $book->title }}</b></h1></td>
                                </tr>
                                <tr>
                                <td><label >ISBN:</label></td>
                                    <td colspan="3"><h5>{{ $book->isbn }}</h5></td>
                                </tr>
                                <tr>
                                <td><label >Author/Publisher:</label></td>
                                    <td><h5>{{ $book->author->name }}</h5></td>
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
                                <td><label >Quantity:</label></td>
                                    <?php 
                                    $num=0;
                                        $product = $products->where('id','=',$cart->product_id)->first(); if(($product->quantity)<=($cart->quantity)){
                                            $num = $product->quantity;
                                        }else{
                                            $num = $cart->quantity;
                                        }
                                    ?>
                                    <td>
                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" placeholder="Quantity" name="quantity[]" value="{{ $num }}" readonly>
                                        </div>
                                    </td>
                                    <input type="hidden" name="product_id[]" value="{{ $book->id }}">
                                    <hr>
                                </tr>
                                <tr>
                                
                                <td><label >SubTotal:</label></td>
                                
                                    <td colspan="3"><h5>Php {{ ($book->product->price*$num) }}</h5></td>
                                    <button class="btn btn-success delete-button" type="button" id="{{ $product->id }}">Remove</button>
                                    <!-- <form action="{{ route('cart.destroy', ['product_id'=>$cart->product_id]) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE')}}
                                        <button type="submit" class="btn">remove</button>
                                    </form> -->
                                    <!-- <button class="btn btn-danger dd" id="{{ $cart->product_id }}">remove</button> -->
                                </tr>
                            </table>    
                        </tr>
                        <?php $cnt++; $total+=($book->product->price*$num)?>
                    @endforeach
                    </tbody>

                </table>

                @auth
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @endauth

            </div>

        <div class="container-fluid" style="text-align:center">
        <input type="hidden" name="total" value="{{ $total }}">
            <br><br><div><h5>Total: Php{{ $total }}</h5></div><br>
            <input type="submit" name="submit" class="btn btn-success" value="Confirm Checkout">
        </div>
        </form>
        
    @endif
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
          // $('#table_id').DataTable();
        //    $('.selectpicker').selectpicker();
            $('.delete-button').click(function(e) {
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                //e.preventDefault();
                let id = $(this).attr('id');
                
                //console.log(" {{url('/cart')}}" + '/' + id);
                $.ajax({
                    url: " {{url('/cart')}}" + '/' + id,
                    type: 'DELETE',
                    data: {},
                    success: function(res){
                        //console.log(res);
                        window.location.href='{{route("cart.index")}}';
                    }

                });
            });
        });
    </script>
@endsection