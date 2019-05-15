@extends('layouts.app1')

@section('content')
<div class="container">
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td>
                        <div class="table-responsive">
                            <table id="table_id" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->date }}</td>
                                    </tr>
                                    
                                        
                                      
                                </tbody>

                            </table>
                            <a href="{{ route('orderline.show' , ['order_id' => $order->id]) }}" class="btn btn-info">Details</a>
                            <a href="{{route('payment.index')}}" class="btn btn-success">Close Details</a>
                    

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
        });
    </script>
@endsection