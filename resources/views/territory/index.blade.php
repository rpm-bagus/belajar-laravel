<html>
<head>
<title> Territories </title>
</head>
<body>
@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Territory</h1>
	</center>
	<ol>
	@foreach ($territories as $territory)
	<li>{{$territory ->TerritoryDescription}}</li>
	@endforeach
</ol>
	@stop


</body>
</html>
