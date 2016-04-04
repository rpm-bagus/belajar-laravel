<head>
<title> Pelanggan </title>
</head>

@extends('master')
@section ('konten_utama')
	
	<ol class="breadcrumb">
	<li><a href ="/">Home</a></li>
	<li><a href ="/customers">Pelanggan</a></li>
	<li class="active">Detil Pelanggan</li>
</ol>

	<h1>{{$customers->CompanyName}}</h1>
	<div class="row">
	<dl class="dl-horizontal">
	<dt>Costumer ID</dt>
	<dd>{{$customers->CustomerID}}</dd>
	
	<dt>Contact Name</dt>
	<dd>{{$customers->ContactName}}</dd>
	
	<dt>Contact Title</dt>
	<dd>{{$customers->ContactTitle}}</dd>
	
	<dt>Address</dt>
	<dd>{{$customers->Address}}</dd>
	
	<dt>City</dt>
	<dd>{{$customers->City}} pcs</dd>
	
	<dt>Region</dt>
	<dd>{{$customers->Region}}</dd>
	
	<dt>Postal Code</dt>
	<dd>{{$customers->PostalCode}} pcs</dd>
	
	<dt>Country</dt>
	<dd>{{$customers->Country}}</dd>
	
	<dt>Phone/Fax</dt>
	<dd>{{$customers->Phone}} / {{$customers->Phone}}</dd>
		
	</dl>	
	</div>
	
	<a class="btn btn-default btn-xl">Ubah</a>
	<a class="btn btn-danger btn-xl">Hapus</a>
	@stop