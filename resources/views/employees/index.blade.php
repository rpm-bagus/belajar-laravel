<head>
<title> Pegawai </title>
</head>

@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Pegawai</h1>
	</center>
	
	<table class="table table-condensed table hover">
	<thread>
		<th>No</th>
		<th>Nama awal Pegawai</th>
		<th>Nama Akhir Pegawai</th>
		<th>Title</th>
		<th>Tanggal Lahir</th>
		<th></th>
	</thread>
	<tbody>
		<?php $i =1; ?>
		@foreach($employees as $employee)
		<tr>
		<td><?php echo $i++; ?></td>
		<td><a href="/employees/{{$employee->EmployeeID}}"> {{$employee->FirstName}}</a></td>
		<td>{{$employee->LastName}}</td>
		<td>{{$employee->Title}}</td>
		<td>{{$employee->BirthDate}}</td>
		<td>
			<a class="btn btn-default btn-xs">Ubah</a>
			<a class="btn btn-danger btn-xs">Hapus</a>
		</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	
@stop
