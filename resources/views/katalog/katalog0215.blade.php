@extends('layout/main0215')
@section('title','Katalog')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class='mt-3'>Katalog Barang</h1>
            <a href="/tambah0215" class="btn btn-success my-3">Tambah Data Katalog</a>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $barang as $katalog)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $katalog->nama_barang }}</td>
                        <td>{{ $katalog->harga }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>    
    </div>
</div>
@endsection