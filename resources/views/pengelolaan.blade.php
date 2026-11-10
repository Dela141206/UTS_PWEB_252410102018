@extends('layouts.app')

@section('title', 'Pengelolaan Buku')

@section('content')
<h1 class="page-title">Pengelolaan Buku</h1>
<p class="subtitle">Daftar koleksi buku yang tersedia di Readify.</p>

<div class="table-wrap">
    <table class="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tahun</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['penulis'] }}</td>
                    <td><span class="badge">{{ $item['kategori'] }}</span></td>
                    <td>{{ $item['tahun'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection