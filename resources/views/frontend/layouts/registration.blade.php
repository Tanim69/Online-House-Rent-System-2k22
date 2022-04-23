@extends('frontend.master')


@section('content')



<div class="row">
   <div class="col-md-4">

   </div>
   <div class="col-md-6">
       <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
        @csrf
    <h1>User Registration</h1>

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger">{{$error}}</div>
     @endforeach
    @endif


    @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
    @endif



    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
        <div class="form-group">
            <label for="name">Enter User Name:</label>
            <input  class="form-control" id="name"type="name"name="name"pleaceholder="Enter User Name">
        </div>

        <div class="form-group">
            <label for="email">Enter User Email:</label>
            <input required class="form-control" id="email"type="email"name="email"pleaceholder="Enter User Email">
        </div>
         <div class="form-group">
            <label for="address">Enter User Address:</label>
            <input required class="form-control" id="address"type="address"name="address"pleaceholder="Enter User address">
        </div>
        <div class="form-group">
            <label for="nidnumber">Enter User NIDnumber:</label>
            <input required class="form-control" id="nidnumber"type="nidnumber"name="nidnumber"pleaceholder="Enter User nidnumber">
        </div>
        <div class="form-group">
            <label for="phonenumber">Enter User Phonenumber:</label>
            <input required class="form-control" id="phonenumber"type="phonenumber"name="phonenumber"pleaceholder="Enter User phonenumber">
        </div>
        <div class="form-group">
            <label for="bkashrocketnumber">Enter User Bkash/Rocketnumber:</label>
            <input required class="form-control" id="bkashrocketnumber"type="bkashrocketnumber"name="bkashrocketnumber"pleaceholder="Enter User Bkash/Rocketnumber">
        </div>
        <!-- <div class="form-group">
            <label for="role">Enter User Role:</label>
            <input  class="form-control" id="role"type="role"name="role"pattern="Houseowner|Tenant" pleaceholder="Enter User role">
        </div> -->

        <div class="form-group">
            <label for="image"> Enter User image</label>
            <input type="file" class="form-control" id="image" name="image" aria-describedly="imageHelp" placeholder="Enter User Image">
            <img width="100px"src="{{url('/uploads/user/') }}" alt="">
        </div>
        <div class="form-group">
            <label for="occupation">Enter User Occupation :</label>
            <input required class="form-control" id="occupation"type="occupation"name="occupation"pleaceholder="Enter User occupation">
        </div>

        <div class="form-group">
            <label for="password">Enter User Password:</label>
            <input  required class="form-control"id="password"type="password"name="password"pleaceholder="Enter User Password">
        </div>
        <button type="submit" class="btn btn-success">Register</button>
    </div>

       </form>
   </div>
   <div class="row row-cols-sm-2 ">



  </div>
</div>




@endsection
