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
                                        <th>title</th>
                                        <th>quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orderlines as $orderline)
                                    <tr>
                                        <td>{{ $orderline->id }}</td>
                                        <td>{{ $orderline->product->book->title }}</td>
                                        <td>{{ $orderline->quantity }}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>

                            </table>
                            <a href="{{route('order.index')}}" class="btn btn-success">Close Details</a>
                    

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