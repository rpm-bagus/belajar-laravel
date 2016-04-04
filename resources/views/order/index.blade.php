<head>
<title> Pesanan </title>
</head>

@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Pesanan</h1>
	</center>
	
	<table class="table table-condensed table hover">
	<thread>
		<th>No</th>
		<th>Costumer ID</th>
		<th>Employee ID</th>
		<th>Tanggal Pesanan</th>
		<th>Tanggal Yang Dibutuhkan</th>
		<th></th>
	</thread>
	<tbody>
		<?php $i =1; ?>
		@foreach($orders as $order)
		<tr>
		<td><?php echo $i++; ?></td>
		<td><a href="/orders/{{$order->OrderID}}"> {{$order->CustomerID}}</a></td>
		<td>{{$order->EmployeeID}}</td>
		<td>{{$order->OrderDate}}</td>
		<td>{{$order->RequiredDate}}</td>
		<td>
			<a class="btn btn-default btn-xs">Ubah</a>
			<a class="btn btn-danger btn-xs">Hapus</a>
		</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	
@stop
