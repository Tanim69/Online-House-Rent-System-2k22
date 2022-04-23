@extends('backend.master')

@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Tenant Details</h3>

                   <p>
        <img style="border-radius: 4px;" width="600px;" src=" {{url('/uploads/uploads/home',$tenant->image)}}" alt="Blog">
    </p>

<span><p style="font-weight:bold;">ID:</span> {{$tenant->id}}</p>

<p>Tenant Name: {{$tenant->name}}</p>

<p> Occupation: {{$tenant->occupation}}</p>
<p> Email: {{$tenant->email}}</p>
<p> Address: {{$tenant->address}}</p>
<p> Phone Number: {{$tenant->phonenumber}}</p>


</div>
</div>
</div>
</div>

@endsection