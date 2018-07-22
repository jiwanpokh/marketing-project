@extends('layouts.layout')
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Position</th>
                <th>Gender</th>
                <th>Married</th>
                <th>Mobile Number</th>
                <th>Date of Birth</th>
                <th>Anniversary Date</th>
            </tr>
        </thead>
        <tbody>
        		 @foreach( $dbval as $key=>$data)
            <tr>
              	<td>{{ $data->name}} </td>
              	<td>{{ $data->position}} </td>
               	<td>{{ $data->address}}</td>
                <td>{{ $data->gender}}</td>
                <td>{{ $data->married}}</td>
                <td>{{ $data->mobile}}</td>
                <td>{{ $data->dob}}</td>
                <td>{{ $data->anniversary}}</td>
            </tr>
            @endforeach
        </tbody>
   			
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Position</th>
                <th>Gender</th>
                <th>Married</th>
                <th>Mobile Number</th>
                <th>Date of Birth</th>
                <th>Anniversary Date</th>
            </tr>
        </tfoot>
<script type="text/javascript"><
$( document ).ready(function() {
    $("#example").DataTable();
    { alert('Srijana');}
});
</script>
   	</table>


@endsection('content')