@extends('frontend.master')

@section('content')
<div class="album py-5">
    <div class="container">

        <form action="{{ route('house.booking') }}"method="post">
            @csrf



         @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
         @endif
         @if(session()->has('error'))
         <div class="alert alert-danger">{{session()->get('error')}}</div>
      @endif

         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">






         <input type="hidden" value="{{ $house->id }}" name="house_id">
        <label for="">House_name:{{ $house->house_name }}</label>
        <label for="">House_address:{{ $house->house_address }}</label>


        <div class="form-group">
            <label for="number">EmargencyContactNumber:</label>
            <input required name="number" id="number" class="form-control">
        </div>
        {{-- <div class="form-group">
            <label for="id">Flat_id:</label>
            <input name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Flat_name:</label>
            <input required name="name" id="name" class="form-control">
        </div> --}}
        <div class="form-group">
            <label for="price">Flat_price:</label>
            <input required name="price" id="price" class="form-control">
        </div>


        <div class="form-group">
            <label for="details">Booking_details:</label>
            <textarea rows="5" name="details" id="details" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Booking_date:</label>
            <input required id="date"type="date"name="date"pleaceholder="date" class="form-control"
             >
        </div>

        <div class="mr-0">

        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>

  </div>

  </form>


</div>
</div>


@endsection
