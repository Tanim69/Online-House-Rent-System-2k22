@extends('backend.master')

@section('title')

admin-dashboard

@endsection

@section('content')
<h1>BookingReport</h1>

<form action="{{ route('report') }}" method="GET">
<div class="row">
    <div class="col-md-8">

     <div class="form-group">
        <label for="from">Date</label>
        <input id="from" type="date"class="form-control" name="date">


     </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <button type="Submit" class="btn btn-primary">Search</button>
            <button type="button"onclick="printDiv('printArea')" class="btn btn-success">Print</button>
        </div>
    </div>
</div>

</form>

<div id="printArea">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">House Name</th>
        <th scope="col">Customer Name</th>
        <th scope="col">flat_price</th>
        <th scope="col">Date</th>
        <th scope="col">Contact</th>
        <th scope="col">details</th>


      </tr>
    </thead>

    <tbody>



        @if(count($allbooking)>0);

  @foreach($allbooking as $key=>$data)

  <tr>
      <td>{{ $key+1 }}</td>
      <td>{{$data->houseinfo->house_name}}</td>
      <td>{{$data->user->name}}</td>
      <td>{{$data->flat_price}}</td>
      <td>{{$data->bookingdate->format('Y-m-d')}}</td>
      <td>{{$data->emargencyContactnumber}}</td>
      <td>{{$data->bookingdetails}}</td>



  </tr>
 @endforeach

 @else
    <h2>No Data Found</h2>

    @endif

    </tbody>

</table>

</div>

<script type="text/javascript">


function printDiv(printArea){
			var printContents = document.getElementById(printArea).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}


</script>





@endsection
