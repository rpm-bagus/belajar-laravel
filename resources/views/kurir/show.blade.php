@extends('layout.master')

@section('konten')
    <ol class="breadcrumb">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="/shipper">Kurir</a></li>
        <li class="active">Detil Kurir</li>
    </ol>

    <h1>PT. {{ $shipper->CompanyName }}</h1>

    <dl class="dl-horizontal">
        <dt>Company Name</dt>
        <dd>{{ $shipper->CompanyName }}</dd>

        <dt>Phone</dt>
        <dd>{{ $shipper->Phone }}</dd>
    </dl>

    <a href="/shipper/{{ $shipper->ShipperID }}/edit" class="btn btn-default" data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span> Ubah
    </a>

    <form method="POST" action="/shipper/{{ $shipper->ShipperID }}" style="display: inline;">
        {{ method_field('DELETE') }}

        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus Data">
            <span class="glyphicon glyphicon-trash"></span> Hapus
        </button>
    </form>
@endsection
