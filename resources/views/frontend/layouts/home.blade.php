@extends('frontend.master')

@section('content')



<section class="">

    <div class="content">
        <img src="/images/dhaka.jpg" alt="Cover Image" style="width:1000px;height:200px;"/>
    </div>

  </section>




  <div class="album py-5">

    <div class="container">



        @foreach($all_houseinfo as $data)




        <div class="row">
          <div class="col-md-5">
          <div>
          <img style="height:300px"src="{{url('/uploads/house/'.$data->house_image) }}"  class="card-img-top" alt="...">
          </div>
          </div>
          <div class="col-md-5">
            <h3>BDT <span style="font-size:40px">{{ $data->flat_price }}</span></h3>
            <p class="card-text">{{ $data->house_address }}</p>
            <p class="card-text"> <strong>Tolet_date: </strong> {{ $data->tolet_date }}</p>
            <p class="btn btn-primary"> Contact Number :</p>{{ $data->phone_number }}

            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group d-flex justify-content-space-between">
                 
                  <a href="{{ route('show.house',$data->id) }}" class="btn btn-primary mr-2"style="margin-right: 20px"><i class="fa fa-home" style="margin-right:10px"></i>Booknow</a>
                <a href="{{ route('details.house',$data->id) }}"class="btn btn-info "style="margin-right:20px"><i class="fa fa-info-circle" style="margin-right:10px"></i>Details</a>
                <a href="{{ route('payment.house',$data->id) }}" class="btn btn-success mr-2"style="margin-right: 20px"><i class="fa fa-credit-card"style="margin-right:10px"></i>Payment</a>
            </div>
                <small class="text-muted"></small>
              </div>
          </div>
          <hr>
        </div>




         @endforeach

         {{-- @endforeach --}}



      </div>
    </div>
  </div>

         @endsection
