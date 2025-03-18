@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/stok/' . $stok->stok_id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="barang_id">Barang</label>
                    <select class="form-control" id="barang_id" name="barang_id" required>
                        @foreach ($barang as $item)
                            <option value="{{ $item->barang_id }}" {{ $item->barang_id == $stok->barang_id ? 'selected' : '' }}>{{ $item->barang_nama }}</option>
                        @endforeach
                    </select>
                    @error('barang_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok_jumlah">Jumlah Stok</label>
                    <input type="number" class="form-control" id="stok_jumlah" name="stok_jumlah" value="{{ $stok->stok_jumlah }}" required>
                    @error('stok_jumlah')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok_tanggal">Tanggal Stok</label>
                    <input type="datetime-local" class="form-control" id="stok_tanggal" name="stok_tanggal" value="{{ date('Y-m-d\TH:i', strtotime($stok->stok_tanggal)) }}" required>
                    @error('stok_tanggal')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('stok') }}" class="btn btn-default">Batal</a>
            </form>
        </div>
    </div>
@endsection