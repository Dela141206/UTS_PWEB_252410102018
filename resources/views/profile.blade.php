@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<h1 class="page-title">Profile</h1>
<p class="subtitle">Informasi akun yang sedang masuk.</p>

{{-- Kartu atas: avatar, nama, statistik --}}
<div class="card profile-header">
    <div class="avatar">{{ strtoupper(substr($username, 0, 1)) }}</div>

    <div>
        <h2 class="profile-name">{{ $username }}</h2>
        <p class="profile-role">Pembaca setia Readify</p>

        <div class="mini-stats">
            @foreach ($statistik as $s)
                <div class="mini-stat">
                    <strong>{{ $s['angka'] }}</strong>
                    <span>{{ $s['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="profile-grid">
    {{-- Kartu kiri: informasi akun --}}
    <div class="card">
        <h2 class="section-title">Informasi Akun</h2>
        <ul class="info-list">
            @foreach ($infoAkun as $label => $nilai)
                <li>
                    <span>{{ $label }}</span>
                    <strong>{{ $nilai }}</strong>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Kartu kanan: genre dan buku favorit --}}
    <div class="card">
        <h2 class="section-title">Genre Favorit</h2>
        <div class="tags">
            @foreach ($genreFavorit as $genre)
                <span class="badge">{{ $genre }}</span>
            @endforeach
        </div>

        <h2 class="section-title">Buku Favorit</h2>
        <ul class="fav-list">
            @foreach ($bukuFavorit as $b)
                <li>
                    {{ $b['judul'] }}
                    <small>{{ $b['penulis'] }}</small>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<a href="{{ route('dashboard', ['username' => $username]) }}" class="btn" style="width: auto; padding: 9px 20px;">
    Kembali ke Dashboard
</a>
@endsection