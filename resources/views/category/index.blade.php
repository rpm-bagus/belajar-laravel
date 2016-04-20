<head>
<title> Kategori </title>
</head>

@extends('master')
@section ('konten_utama')
	<center><h1>Daftar Semua Kategori</h1>
	</center>

	<table class="table table-condensed table hover">
	<thread>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th></th>
	</thread>
	<tbody>
		@foreach($categories as $category)
		<tr>
		<td>{{$category->CategoryName}}</td>
		<td>{{$category->Description}}</td>
		<td>
			<a class="btn btn-default btn-xs">Ubah</a>
			<a class="btn btn-danger btn-xs">Hapus</a>
		</td>
	</tr>
	@endforeach
	</tbody>
	</table>

@stop
