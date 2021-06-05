@extends('layout/main0215')
@section('title','Transaksi')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class='mt-3'>Transaksi Pesanan</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $barang as $riwayat)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $riwayat->nama }}</td>
                        <td>{{ $riwayat->nama_barang }}</td>
                        <td>{{ $riwayat->alamat }}</td>
                        <td>
                            <a href="#" style="text-decoration:none" class="badge bg-primary">edit</a>
                            <a href="#" style="text-decoration:none" class="badge bg-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>    
    </div>
</div>
@endsection