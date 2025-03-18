@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('stok') }}">
                @csrf
                <div class="form-group">
                    <label for="barang_id">Barang</label>
                    <select class="form-control" id="barang_id" name="barang_id" required>
                        <option value="">- Pilih Barang -</option>
                        @foreach ($barang as $item)
                            <option value="{{ $item->barang_id }}">{{ $item->barang_nama }}</option>
                        @endforeach
                    </select>
                    @error('barang_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="user_id">User</label>
                    <select class="form-control" id="user_id" name="user_id" required>
                        <option value="">- Pilih User -</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok_jumlah">Jumlah Stok</label>
                    <input type="number" class="form-control" id="stok_jumlah" name="stok_jumlah" required>
                    @error('stok_jumlah')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok_tanggal">Tanggal Stok</label>
                    <input type="datetime-local" class="form-control" id="stok_tanggal" name="stok_tanggal" required>
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