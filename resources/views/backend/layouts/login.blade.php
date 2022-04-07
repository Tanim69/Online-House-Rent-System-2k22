
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">




    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>


<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-4">
        <form action="{{route('admin.dologin')}}" method="post">
         @csrf
     <h1>Login Here</h1>

     @if ($errors->any())
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
      @endforeach
     @endif


     @if(session()->has('success'))
     <div class="alert alert-success">{{session()->get('success')}}</div>
     @endif



     <div class="form-group">
         <label for="email">Enter  Email:</label>
         <input required class="form-control" id="email"type="email"name="email"pleaceholder="Enter User Email">
     </div>

     <div class="form-group">
         <label for="password">Enter Password:</label>
         <input  required class="form-control"id="password"type="password"name="password"pleaceholder="Enter User Password">
     </div>
     <button type="submit" class="btn btn-success">Login</button>

        </form>
    </div>
   <div class="col-md-3">

   </div>
 </div>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


      @yield('content')



  </main>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>










