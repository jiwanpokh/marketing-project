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
            </tr>
        </thead>
        <tbody>
        	@foreach($potentialcltdata as $pclient)
            <tr>
                <td>{{$pclient->Organization_Name}}</td>
                <td>{{$pclient->Country_Name}}</td>
                <td>{{$pclient->Admin_Address}}</td>
                <td>{{$pclient->Email}}</td>
                <td>{{$pclient->contactno}}</td>
                <td>{{$pclient->duties}}</td>
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
            </tr>
        </tfoot>
    </table>
</body>

</html>
@endsection('content')	