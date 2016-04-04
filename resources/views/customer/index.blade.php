<head>
<title> Pelanggan </title>
</head>

@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Pesanan</h1>
	</center>
	
	<table class="table table-condensed table hover">
	<thread>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Nama Kontak</th>
		<th>Alamat</th>
		<th>Kode Pos</th>
		<th></th>
	</thread>
	<tbody>
		<?php $i =1; ?>
		@foreach($customers as $customer)
		<tr>
		<td><?php echo $i++; ?></td>
		<td><a href="/customers/{{$customer->CustomerID}}"> {{$customer->CompanyName}}</a></td>
		<td>{{$customer->ContactName}}</td>
		<td>{{$customer->Address}}</td>
		<td>{{$customer->PostalCode}}</td>
		<td>
			<a class="btn btn-default btn-xs">Ubah</a>
			<a class="btn btn-danger btn-xs">Hapus</a>
		</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	
@stop
