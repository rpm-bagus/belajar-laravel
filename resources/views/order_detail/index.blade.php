<html>
<head>
<title> Order Detail </title>
</head>
<body>
@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Order_detail</h1>
	</center>
	<ol>
	@foreach ($order_details as $order_detail)
	<li>{{$order_detail ->OrderID}}</li>
	@endforeach
</ol>
	@stop


</body>
</html>
