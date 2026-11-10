@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="page-title">Halo, {{ $username }}! 👋</h1>
<p class="subtitle">Selamat datang di Readify. Berikut ringkasan koleksi bukumu.</p>

<div class="stats">
    <div class="stat-card">
        <div class="stat-number">{{ $totalBuku }}</div>
        <div class="stat-label">Total Judul Buku</div>
    </div>

    <div class="stat-card">
        <div class="stat-number">{{ $totalStok }}</div>
        <div class="stat-label">Total Stok</div>
    </div>

    <div class="stat-card">
        <div class="stat-number">{{ $totalKategori }}</div>
        <div class="stat-label">Kategori</div>
    </div>
</div>

<div class="card">
    <h2 class="section-title">Mau ke mana?</h2>
    <p class="subtitle" style="margin-bottom: 16px;">Lihat profilmu atau kelola daftar koleksi buku.</p>

    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn" style="width: auto; padding: 11px 22px;">
        Buka Pengelolaan Buku
    </a>
</div>
@endsection