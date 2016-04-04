<html>
<head>
<title> Shippers </title>
</head>
<body>
@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Shipper</h1>
	</center>
	<ol>
	@foreach ($shippers as $shipper)
	<li>{{$shipper ->CompanyName}}</li>
	@endforeach
</ol>
	@stop


</body>
</html>