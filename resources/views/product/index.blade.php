<head>
<title> Produk </title>
</head>

@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Produk</h1>
	</center>
	
	<table class="table table-condensed table hover">
	<thread>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Kode Kategori</th>
		<th>Kode Pemasok</th>
		<th>Kuantitas Per Unit</th>
		<th>Harga Satuan</th>
		<th></th>
	</thread>
	<tbody>
		<?php $i =1; ?>
		@foreach($products as $product)
		<tr>
		<td><?php echo $i++; ?></td>
		<td><a href="/products/{{$product->ProductID}}"> {{$product->ProductName}}</a></td>
		<td>{{$product->CategoryID}}</td>
		<td>{{$product->SupplierID}}</td>
		<td>{{$product->QuantityPerUnit}}</td>
		<td>{{$product->UnitPrice}}</td>
		<td>
			<a class="btn btn-default btn-xs">Ubah</a>
			<a class="btn btn-danger btn-xs">Hapus</a>
		</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	
@stop
