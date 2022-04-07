@extends('frontend.master')

@section('content')


<div class="album py-5">
    <div class="container">





   @if(session()->has('message'))
   <div class="alert alert-success">{{session()->get('message')}}</div>
   @endif


        <form action="{{ route('payment.info')}}" method="POST">
            @csrf

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">


        <input type="hidden" value="{{ $house->id }}" name="house_id">
        <label for="">House_name:{{ $house->house_name }}</label>

        <label for="">House_address:{{ $house->house_address }}</label>


        <div class="form-group">
            <label for="id">Enter House ID(this is avaible on bookingmail):</label>
            <input required name="id" id="id" class="form-control">
        </div>

        <div class="form-group">
            <label for="method">Enter Payment Method(Bkash/Rocket):</label>
            <input required name="method" id="method" class="form-control">
        </div>

        <div class="form-group">
            <label for="number">Enter Payment number:</label>
            <input required name="number" id="number" class="form-control">
        </div>

        <div class="form-group">
            <label for="date">Enter Payment Date:</label>
            <input required id="date"type="date"name="date"pleaceholder="date" class="form-control"
             >
        </div>
        <div class="form-group">
            <label for="transactionid">Enter Transaction Id:</label>
            <input required name="transactionid" id="transactionid" class="form-control">
        </div>
        <div class="form-group">
            <label for="amount">Enter Payment Amount:</label>
            <input required name="amount" id="amount" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>

    </form>
    </div>
 </div>
</div>





@endsection
