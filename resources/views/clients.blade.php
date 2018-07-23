@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
    
</head>
<body>
<table id="example" class="display" style="width:100%;margin-top:5000px;">
        <thead>
            <tr>
                <th>Organization Name</th>
                <th>City</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Duties</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($clientdata as $client)
            <tr>
                <td>{{$client->Organization_Name}}</td>
                <td>{{$client->Country_Name}}</td>
                <td>{{$client->Admin_Address}}</td>
                <td>{{$client->Email}}</td>
                <td>{{$client->contactno}}</td>
                <td>{{$client->duties}}</td>

             	<td><a href="{{route('delete',$client->id )}}" type="button" name="" value="Delete" class="btn btn-primary">DELETE</a>&nbsp &nbsp <a href="" type="button" value="Delete" name="otherbutton" class="btn btn-danger">EDIT</a></td>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
          <tr>
                <th>Organization Name</th>
                <th>City</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Duties</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>
@endsection('content')	