@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table id="table_id">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>order_id</td>
                        <td>card number</td>
                        <td>address</td>
                        <td>amount</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->order_id }}</td>
                        <td>{{ $payment->card_num }}</td>
                        <td>{{ $payment->address }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>
                        <a href="{{ route('order.show' , ['order_id' => $payment->order_id]) }}" class="btn btn-info">Details</a>
                        </td>
                    </tr>
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