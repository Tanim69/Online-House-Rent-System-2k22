@extends('backend.master')

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add House
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
    
  </thead>
<tbody>
  @foreach($houses as $data)
  <tr>

       <td> {{$data->id}}</td>
       <td> {{$data->name}}</td>
       <td> {{$data->email}}</td>
       <td> {{$data->address}}</td>
       <td> <image width="100"src="{{url('/uploads/uploads/home',$data->image)}}"alt=""></td>
       <td>
           <a class="btn btn-success"  href="{{ route('house.view',$data->id) }}">View</a>
           <a class="btn btn-primary"  href="{{route('house.edit',$data->id)}}">Edit</a>
           <a class="btn btn-danger" href="{{route('house.delete',$data->id)}}">Delete</a>
       </td>
  </tr>
  @endforeach
</tbody>
</table>

  <tr><!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="Houseinfo" id="exampleModalLabel">Houseinfo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('house.create')}}" method="post">

      @csrf

      <div class="modal-body">

      <form>
  <div class="form-group">
    <label for="id">ID</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID">
    </div>


    <div class="form-group">
    <label for="email"> Email </label>
    <input type="text" class="form-control" id="email" name="email" aria-describedly="emailHelp" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="image"> Image</label>
    <input type="file" class="form-control" id="image" name="image" aria-describedly="imageHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedly="NameHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" aria-describedly="addressHelp" placeholder="Enter Name">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection
