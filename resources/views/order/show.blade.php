<head>
<title> Pesanan </title>
</head>

@extends('master')
@section ('konten_utama')
	
	<ol class="breadcrumb">
	<li><a href ="/"><span class="glyphicon glyphicon-home"></span></a></li>
	<li><a href ="/orders">Order</a></li>
	<li class="active">Detil Order</li>
</ol>

	<h1>{{$orders->CustomerID}}</h1>
	<div class="row">
	<dl class="dl-horizontal">
	<dt>Order ID</dt>
	<dd>{{$orders->OrderID}}</dd>
	
	<dt>Employee ID</dt>
	<dd>{{$orders->EmployeeID}}</dd>
	
	<dt>Order Date</dt>
	<dd>{{$orders->OrderDate}}</dd>
	
	<dt>Required Date</dt>
	<dd>{{$orders->RequiredDate}}</dd>
	
	<dt>Shipped Date</dt>
	<dd>{{$orders->ShippedDate}} pcs</dd>
	
	<dt>Ship Via</dt>
	<dd>{{$orders->ShipVia}}</dd>
	
	<dt>Freight</dt>
	<dd>{{$orders->Freight}} pcs</dd>
	
	<dt>Ship Name</dt>
	<dd>{{$orders->ShipName}}</dd>
	
	<dt>Ship Address</dt>
	<dd>{{$orders->ShipAddress}}</dd>
	
	<dt>Ship City</dt>
	<dd>{{$orders->ShipCity}}</dd>
	
	<dt>Ship Region</dt>
	<dd>{{$orders->ShipRegion}}</dd>
	
	<dt>Ship Postal Code</dt>
	<dd>{{$orders->ShipPostalCode}}</dd>
	
	<dt>Ship Country</dt>
	<dd>{{$orders->ShipCountry}}</dd>
	
	</dl>	
	</div>
	
	<a class="btn btn-default btn-xl">Ubah</a>
	<a class="btn btn-danger btn-xl">Hapus</a>
	@stop