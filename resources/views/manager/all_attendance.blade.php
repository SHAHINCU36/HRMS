@extends('manager.manager_dashboard')
@section('content')


<div class="row">
<div class="col-md-12">
  <table id="order-listing" class="table table-responsive table-hover" style="width:100%;">
	<thead>
		<tr>
			

			<th>Sl</th>
			<th>Date</th>
			<th>Action</th>
			

		</tr>


	</thead>
<tbody>
	
<?php $sl=1;?>

@foreach($all_att as $row)
<tr>

	<td> {{$sl++}}</td>
	<td>{{$row->att_date}}</td>
	<td><a href="{{URL::to('/viewAttendance/'.$row->att_date)}}"  class="btn btn-sm btn-info">View</a></td>


</tr>

@endforeach

</tbody>


</table>

</div>

</div>






@endsection