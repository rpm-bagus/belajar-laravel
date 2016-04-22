@extends('layout.master')

@section('konten')
    <ol class="breadcrumb">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="/employee">Karyawan</a></li>
        <li class="active">Tambah Karyawan</li>
    </ol>

    <h1>Add New Employee</h1>

    <form method="POST" action="/employee" class="form-horizontal">
        @include('karyawan._form')
    </form>
@endsection
