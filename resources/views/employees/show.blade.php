<head>
<title> Pegawai </title>
</head>

@extends('master')
@section ('konten_utama')
	
	<ol class="breadcrumb">
	<li><a href ="/">Home</a></li>
	<li><a href ="/employees">Pegawai</a></li>
	<li class="active">Detil Pegawai</li>
</ol>

	<h1>{{$employees->FirstName}} {{$employees->LastName}}</h1>
	<div class="row">
	<dl class="dl-horizontal">
	<dt>Title</dt>
	<dd>{{$employees->Title}}</dd>
	
	<dt>Title Of Courtesy</dt>
	<dd>{{$employees->TitleOfCourtesy}}</dd>
	
	<dt>Tanggal Lahir</dt>
	<dd>{{$employees->BirthDate}}</dd>
	
	<dt>Tanggal Diterima</dt>
	<dd>{{$employees->HireDate}}</dd>
	
	<dt>Alamat</dt>
	<dd>{{$employees->Address}} pcs</dd>
	
	<dt>Kota</dt>
	<dd>{{$employees->City}} pcs</dd>
	
	<dt>Region</dt>
	<dd>{{$employees->Region}} pcs</dd>
	
	<dt>Kode Pos</dt>
	<dd>{{$employees->PostalCode}}</dd>
	
	<dt>Negara</dt>
	<dd>{{$employees->Country}}</dd>
	
	<dt>Telepon Rumah</dt>
	<dd>{{$employees->HomePhone}}</dd>
	
	<dt>Extension</dt>
	<dd>{{$employees->Extension}}</dd>
	
	<dt>Foto</dt>
	<dd>{{$employees->Photo}}</dd>
	
	<dt>Notes</dt>
	<dd>{{$employees->Notes}}</dd>
	
	<dt>Report to</dt>
	<dd>{{$employees->ReportsTo}}</dd>
	
	<dt>Photo Path</dt>
	<dd>{{$employees->PhotoPath}}</dd>
	
	</dl>	
	</div>
	
	<a class="btn btn-default btn-xl">Ubah</a>
	<a class="btn btn-danger btn-xl">Hapus</a>
	@stop