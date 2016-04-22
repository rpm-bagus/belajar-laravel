@extends('layout.master')

@section('konten')
    <ol class="breadcrumb">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="/customer">Pelanggan</a></li>
        <li class="active">Ubah Pelanggan</li>
    </ol>

    <h1>Pelanggan ID: {{ $customer->CustomerID }}</h1>

    <form method="POST" action="/customer/{{ $customer->CustomerID }}" class="form-horizontal">
        {{ method_field('PATCH') }}

        @include('pelanggan._form')
    </form>
@endsection
