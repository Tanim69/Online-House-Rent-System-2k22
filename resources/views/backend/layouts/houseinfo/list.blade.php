@extends('backend.master')



@section('content')

<a class="btn btn-success"href="{{route('houseinfo.create')}}">Add House info</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>

        <th scope="col">house_id</th>
        <th scope="col">house_name</th>
        <th scope="col">house_address</th>
        <th scope="col">phone_number</th>
        <th scope="col">tolet_date</th>
        <th scope="col">house_description</th>
        <th scope="col">floor_description</th>
        <th scope="col">flat_description</th>
        <th scope="col">flat_name</th>
        <th scope="col">flat_size</th>
        <th scope="col">flat_price</th>
        <th scope="col">house_image</th>
        <th scope="col">Action</th>





      </tr>
    </thead>
    <tbody>
        @foreach ($houseinfos as $key=>$data)
      <tr>
        <th scope="row">{{$key+1}}</th>

        <td>{{$data->house_id}}</td>
        <td>{{$data->house_name}}</td>
        <td>{{$data->house_address}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->tolet_date}}</td>
        <td>{{$data->house_description}}</td>
        <td>{{$data->floor_description}}</td>
        <td>{{$data->flat_description}}</td>
        <td>{{$data->flat_name}}</td>
        <td>{{$data->flat_size}}</td>
        <td>{{$data->flat_price}}</td>
        <td>
            <img width="100px"src="{{url('/uploads/house/'.$data->house_image) }}" alt="">

        </td>

        <td>
            {{-- <a class="btn btn-success"  href="">View</a> --}}
            <a class="btn btn-danger" href="{{route('houseinfo.delete',$data->id)}}">Delete</a>
        </td>


      </tr>
      @endforeach

    </tbody>
  </table>


@endsection
