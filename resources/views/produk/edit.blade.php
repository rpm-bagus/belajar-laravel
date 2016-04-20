@extends('layout.master')

@section('konten')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/product">Produk</a></li>
        <li class="active">Ubah Product</li>
    </ol>

    <h1>Produk ID: {{ $product->ProductID }}</h1>

    <form method="POST" action="/product/{{ $product->ProductID }}" class="form-horizontal">
        {{ method_field('PATCH') }}

        @include('produk._form')
    </form>
@endsection
