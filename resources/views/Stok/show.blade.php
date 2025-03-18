@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr>
                    <th>ID</th>
                    <td>{{ $stok->stok_id }}</td>
                </tr>
                <tr>
                    <th>Barang</th>
                    <td>{{ $stok->barang->barang_nama }}</td>
                </tr>
                <tr>
                    <th>Jumlah Stok</th>
                    <td>{{ $stok->stok_jumlah }}</td>
                </tr>
                <tr>
                    <th>Tanggal Stok</th>
                    <td>{{ $stok->stok_tanggal }}</td>
                </tr>
            </table>
            <a href="{{ url('stok') }}" class="btn btn-default">Kembali</a>
        </div>
    </div>
@endsection