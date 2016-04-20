@extends('layout.master')

@section('konten')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/supplier">Pemasok</a></li>
        <li class="active">Tambah Pemasok</li>
    </ol>

    <h1>Add New Supplier</h1>

    <form method="POST" action="/supplier" class="form-horizontal">
        @include('pemasok._form')
    </form>
@endsection
