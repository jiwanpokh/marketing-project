@extends('layouts.layout')
@section('content')

<table id="example" class="table table-striped table-bordered" style="width:100%>
	<thead class="thead-dark">
		<tr>
			<th scope="col">id</th>
			<th scope="col">Organization Name</th>
			<th scope="col">Address</th>
			<th scope="col">Email</th>
			<th scope="col">Follow-Up</th>
			<th scope="col">Note</th>
			<th scope="col">Duty</th>
			<th scope="col">Contact Us</th>
		</tr>
	</thead>
	<tbody>

		@foreach($clientdata as $key=>$client)

		<tr>

			<th scope="row">{{$client->id}}</th>
			<td>{{$client->Organization_Name}}</td>
			<td>{{$client->Admin_Address}}</td>
			<td>{{$client->Email}}</td>
			<td>{{$client->followup}}</td>
			<td>{{$client->note}}</td>
			<td>{{$client->duties}}</td>
			<td>{{$client->contactno}}</td>
		</tr>
		@endforeach
	</tbody>
</table>




@endsection('content')
