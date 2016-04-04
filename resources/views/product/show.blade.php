<head>
<title> Produk </title>
</head>

@extends('master')
@section ('konten_utama')
	
	<ol class="breadcrumb">
	<li><a href ="/">Home</a></li>
	<li><a href ="/products">Produk</a></li>
	<li class="active">Detil Produk</li>
</ol>

	<h1>{{$products->ProductName}}</h1>
	<div class="row">
	<dl class="dl-horizontal">
	<dt>Category</dt>
	<dd>{{$products->CategoryID}}</dd>
	
	<dt>Supplier</dt>
	<dd>{{$products->SupplierID}}</dd>
	
	<dt>Kuantitas Satuan</dt>
	<dd>{{$products->QuantityPerUnit}}</dd>
	
	<dt>Harga Satuan</dt>
	<dd>{{$products->UnitPrice}}</dd>
	
	<dt>Stock Unit</dt>
	<dd>{{$products->UnitsInStock}} pcs</dd>
	
	<dt>Order Unit</dt>
	<dd>{{$products->UnitsOnOrder}} pcs</dd>
	
	<dt>Re-order Level</dt>
	<dd>{{$products->ReorderLevel}} pcs</dd>
	
	<dt>Status</dt>
	<dd>{{$products->Discontinued}}</dd>
	</dl>
	</div>
	
	<a class="btn btn-default btn-xl">Ubah</a>
	<a class="btn btn-danger btn-xl">Hapus</a>
	@stop