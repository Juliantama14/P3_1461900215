@extends('layout/main0215')
@section('title','Form Ubah Data Transaksi')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class='mt-3'>Form Ubah Data Transaksi</h2>
            <form method="post" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                    @error ('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Barang</label>
                    <input type="text" class="form-control @error ('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Masukkan nama_barang" name="nama_barang" value="{{ $student->nama_barang }}">
                    @error ('nama_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Email</label>
                    <input type="text" class="form-control @error ('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{ $student->alamat }}">
                    @error ('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Ubah Data!</button>
        
            </form> 
        </div>    
    </div>
</div>
@endsection