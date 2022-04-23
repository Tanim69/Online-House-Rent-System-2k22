@extends('backend.master')

@section('content')
<h4 style="text-align:center;">House Information</h4>
<form action="{{ route('house.update',$house->id) }}" method="POST" enctype="multipart/form-data">
@method('PUT')
   <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">image</th>
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">ID</label>
       <input name="id"
      class="form-control" id="validationCustom01"  value="{{ $house->id }}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Name</label>
      <input name="name" value="{{ $house->name}}"
       class="form-control" id="validationCustom02" placeholder="Destination"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername"> Email</label>

        <input name="email"  value="{{ $house->email}}"
         class="form-control" id="validationCustomUsername" placeholder="Duration" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.

      </div>
    </div>
  </div>


    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Address</label>

        <input name="address"   value="{{$house->address}}"
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