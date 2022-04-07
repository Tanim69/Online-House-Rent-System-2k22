@extends('frontend.master')


@section('content')



<div class="row">
   <div class="col-md-2">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
   @endif


   @if(session()->has('success'))
   <div class="alert alert-success">{{session()->get('success')}}</div>
   @endif

   </div>
   <div class="col-md-8">
       <form action="{{route('login')}}" method="post">
        @csrf
    <h1>User Login</h1>





    <div class="form-group">
        <label for="email">Enter User Email:</label>
        <input required class="form-control" id="email"type="email"name="email"pleaceholder="Enter User Email">
    </div>

    <div class="form-group">
        <label for="password">Enter User Password:</label>
        <input  required class="form-control"id="password"type="password"name="password"pleaceholder="Enter User Password">
    </div>
    <button type="submit" class="btn btn-success">Login</button>

       </form>
   </div>
  <div class="col-md-2">

  </div>
</div>




@endsection
