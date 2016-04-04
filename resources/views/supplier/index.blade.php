<html>
<head>
<title> Suppliers </title>
</head>
<body>
@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Supplier</h1>
	</center>
	<ol>
	@foreach ($suppliers as $sup)
	<li>{{$sup ->CompanyName}}</li>
	@endforeach
</ol>
	@stop


</body>
</html>