@extends('backend.master')

@section('content')
<h4 style="text-align:center;">Update Information</h4>
<form action="{{ route('tenant.update',$tenant->id) }}" method="POST" enctype="multipart/form-data">
@method('PUT')

  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">ID</label>
       <input name="id"
      class="form-control" id="validationCustom01"  value="{{$tenant->id}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Name</label>
      <input name="name" value="{{$tenant->name}}"
       class="form-control" id="validationCustom02" placeholder="Destination"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Address</label>

        <input name="address"   value="{{$tenant->address}}"
         class="form-control" id="validationCustomUsername" placeholder="Duration" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.

      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername"> Occupation</label>

        <input name="occupation"  value="{{$tenant->occupation}}"
         class="form-control" id="validationCustomUsername" placeholder="Duration" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.

      </div>
    </div>
  </div>

<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername"> Email</label>

        <input name="email"  value="{{$tenant->email}}"
         class="form-control" id="validationCustomUsername" placeholder="Duration" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.

      </div>
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Phone Number</label>

        <input name="phonenumber"   value="{{$tenant->phonenumber}}"
         class="form-control" id="validationCustomUsername" placeholder="Duration" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.

      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
      </div>

      </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>
</div>
</div>
</form>
@endsection