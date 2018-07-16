@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Clients Details</title>
</head>
<body>
		@php
		foreach ($clientdata as $client) 
		{
		    echo $client->row();
		}
		@endphp
</body>
 </html>
@endsection('content')