@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="card login-box">
    <h1 class="page-title">Selamat Datang 👋</h1>
    <p class="subtitle">Masuk untuk melihat koleksi bukumu.</p>

    {{-- Pesan error kalau username kosong --}}
    @if ($errors->any())
        <div class="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"
                   value="{{ old('username') }}" placeholder="Masukkan username">
        </div>

        <button type="submit" class="btn">Masuk</button>
    </form>
</div>
@endsection