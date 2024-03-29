@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content_body')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div style="display: flex; align-items: center; margin-left:20px; margin-top:18px" >
                <div style="margin-right: 10px;">
                    <a href="/kategori/create" class="btn btn-primary btn-lg" style="padding: 5px 10px;">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div style="margin-right: 10px;">
                    <a href="/kategori/update" class="btn btn-success btn-lg" style="padding: 5px 10px;">
                        <i class="fa fa-edit"></i>
                    </a>
                </div>
                <div>
                    <a href="/kategori/delete" class="btn btn-danger btn-lg" style="padding: 5px 10px;">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            </div>
            
            
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                {{ $dataTable->table() }}
            </div>
        </div>
        
    </div>
@endsection

@push('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@endpush

@push('scripts')
    {{ $dataTable->scripts() }}    
@endpush