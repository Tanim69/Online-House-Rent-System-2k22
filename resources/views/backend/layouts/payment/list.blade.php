@extends('backend.master')



@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>

        <th scope="col">house_id</th>
        <th scope="col">use_id</th>
        <th scope="col">flat_price</th>
        <th scope="col">payment_method</th>
        <th scope="col">booking_date</th>
        <th scope="col">transaction_id</th>





      </tr>
    </thead>
    <tbody>

        @foreach ($allpayment as $key=>$data)



      <tr>
        <th scope="row">{{$key+1}}</th>

        <td>{{$data->house_id}}</td>
        <td>{{$data->user_id}}</td>
        <td>{{$data->flat_price}}</td>
        <td>{{$data->paymentmethod}}</td>
        <td>{{$data->bookingdate}}</td>
        <td>{{$data->transaction_id}}</td>





        </tr>
        @endforeach

      </tbody>
    </table>









@endsection
