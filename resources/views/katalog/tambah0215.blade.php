@extends('layout/main0215')
@section('title','Tambah Data Katalog')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class='mt-3'>Tambah Data Katalog</h2>
            <form method="post" action="/katalog0215">
            @csrf
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control @error ('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Masukkan nama_barang" name="nama_barang" value="{{ old('nama_barang') }}">
                    @error ('nama_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="text" class="form-control @error ('harga') is-invalid @enderror" id="harga" placeholder="Masukkan harga barang" name="harga" value="{{ old('harga') }}">
                    @error ('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Tambah Data!</button>
        
            </form> 
        </div>    
    </div>
</div>
@endsection