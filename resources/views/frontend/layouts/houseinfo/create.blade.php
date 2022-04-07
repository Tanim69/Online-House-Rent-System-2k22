@extends('backend.master')



@section('content')

<form action="{{route('houseinfo.store')}}" method="post" enctype="multipart/form-data">



    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">

        @csrf

        <h5>[5% detect on total flat price]</h5>

        <div class="form-group">
            <label for="id">Enter House id:</label>
            <input id="id"type="number"name="house_id"pleaceholder="house_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter House name:</label>
            <input id="name"type="text"name="house_name"pleaceholder="House_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="address">Enter House address:</label>
            <input id="address"type="text"name="house_address"pleaceholder="House_address" class="form-control">
        </div>
        <div class="form-group">
            <label for="number">Enter Phone Number:</label>
            <input id="number"type="number"name="phone_number"pleaceholder="Phone_number" class="form-control">
        </div>


        <div class="form-group">
            <label for="date">Enter Tolet date:</label>
            <input id="date"type="date"name="tolet_date"pleaceholder="Tolet_date" class="form-control">
        </div>


        <div class="form-group">
            <label for="description">Enter House description:</label>
            <textarea id="description"type="text"name="house_description"pleaceholder="house_description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Enter Floor description:</label>
            <textarea id="description"type="text"name="floor_description"pleaceholder="floor_description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="name">Enter Flat Name:</label>
            <input id="name"type="text"name="flat_name"pleaceholder="flat_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="size">Enter Flat Size:</label>
            <input id="size"type="text"name="flat_size"pleaceholder="flat_size" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Enter Flat description:</label>
            <textarea id="description"type="text"name="flat_description"pleaceholder="flat_description" class="form-control"></textarea>
        </div>


        <div class="form-group">
            <label for="description">Enter Flat Price:</label>
            <input id="price"type="price"name="flat_price"pleaceholder="flat_price" class="form-control">
        </div>

        <div class="form-group">
            <label for="image"> Enter House image</label>
            <input type="file" class="form-control" id="image" name="house_image" aria-describedly="imageHelp" placeholder="Enter Name">
          </div>




    <button type="Submit" class="btn btn-success"> Submit</button>
    </div>
</form>

@endsection
