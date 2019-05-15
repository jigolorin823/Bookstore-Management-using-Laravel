@extends('layouts.app1')

@section('content')
    <div class="container">
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td>
                        <div class="table-responsive">
                            <table id="table_id">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>name</td>
                                        <td>date</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->date }}</td>
                                        <td>
                                            <a href="{{ route('orderline.show' , ['order_id' => $order->id]) }}" class="btn btn-info">Details</a>
                                            <!-- <a href="{{ route('order.edit' , ['order_id' => $order->id]) }}" class="btn btn-info">Edit</a> -->
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>

                    

                        </div>
                    </td>
                    
                </tr>
            
            </tbody>
        </table>
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