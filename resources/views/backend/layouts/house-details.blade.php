@extends('backend.master')

@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">House Details</h3>

                   <p>
        <img style="border-radius: 4px;" width="600px;" src="{{url('/uploads/uploads/home',$house->image)}}" alt="Blog">
    </p>

<span><p style="font-weight:bold;">ID:</span> {{$house->id}}</p>

<p>House Name: {{$house->name}}</p>

<p> Email: {{$house->email}}</p>
<p> Address: {{$house->address}}</p>


</div>
</div>
</div>
</div>

@endsection