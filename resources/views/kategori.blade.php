
@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content_body')
<!DOCTYPE html>
<html>
    <head>
        <title>Data kategori Barang</title>
    </head>
    <body>
        <h1>Data kategori Barang</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Kode kategori</th>
                <th>Nama kategori</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->kategori_id }}</td>
                    <td>{{ $d->kategori_kode }}</td>
                    <td>{{ $d->kategori_nama }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
@endsection

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush
