<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Readify') | Readify</title>

    <link rel="icon" type="image/jpeg" href="{{ asset('loopyimup.jpeg') }}">

    <style>

        :root {
            --pink-50:  #fff7fa;
            --pink-100: #ffe8f0;
            --pink-200: #ffd0e0;
            --pink-400: #f59ab8;
            --pink-500: #ec7aa0;
            --pink-600: #d9608a;
            --teks:     #4a3540;
            --teks-lembut: #8a7480;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', system-ui, Arial, sans-serif;
            background: var(--pink-50);
            color: var(--teks);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a { color: inherit; text-decoration: none; }

        .container { width: 100%; max-width: 980px; margin: 0 auto; padding: 0 20px; }
        .main { flex: 1; padding: 36px 0; }

       
        .page-title { font-size: 1.7rem; color: var(--pink-600); margin-bottom: 4px; }
        .subtitle { color: var(--teks-lembut); margin-bottom: 28px; }
        h2.section-title { font-size: 1.1rem; margin-bottom: 14px; }

       
        .navbar { background: #fff; border-bottom: 1px solid var(--pink-100); }
        .navbar-inner {
            display: flex; align-items: center; justify-content: space-between;
            flex-wrap: wrap; gap: 10px; padding: 14px 20px;
            max-width: 980px; margin: 0 auto;
        }
        .brand { font-weight: 700; font-size: 1.25rem; color: var(--pink-600); }
        .nav-links { display: flex; align-items: center; flex-wrap: wrap; gap: 6px; }
        .nav-links a { padding: 6px 14px; border-radius: 999px; font-size: .92rem; }
        .nav-links a:hover { background: var(--pink-100); }
        .nav-links a.logout { background: var(--pink-100); color: var(--pink-600); font-weight: 600; }

       
        .card {
            background: #fff; border: 1px solid var(--pink-100);
            border-radius: 18px; padding: 26px;
            box-shadow: 0 4px 14px rgba(236, 122, 160, .08);
        }

      
        .login-box { max-width: 420px; margin: 20px auto; }
        .form-group { margin-bottom: 16px; }
        label { display: block; font-size: .85rem; font-weight: 600; margin-bottom: 6px; }
        input[type="text"] {
            width: 100%; padding: 11px 14px; font-size: 1rem;
            border: 1px solid var(--pink-200); border-radius: 12px; background: var(--pink-50);
        }
        input[type="text"]:focus { outline: 2px solid var(--pink-400); background: #fff; }
        .btn {
            display: inline-block; width: 100%; padding: 11px; border: 0; cursor: pointer;
            background: var(--pink-500); color: #fff; font-size: 1rem; font-weight: 600;
            border-radius: 12px;
        }
        .btn:hover { background: var(--pink-600); }
        .alert {
            background: #ffe3e8; color: #b03a5b; border-radius: 10px;
            padding: 10px 14px; font-size: .88rem; margin-bottom: 16px;
        }


        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(190px, 1fr)); gap: 16px; margin-bottom: 26px; }
        .stat-card {
            background: #fff; border: 1px solid var(--pink-100); border-radius: 18px; padding: 22px;
            box-shadow: 0 4px 14px rgba(236, 122, 160, .08);
        }
        .stat-number { font-size: 2.1rem; font-weight: 700; color: var(--pink-600); }
        .stat-label { color: var(--teks-lembut); font-size: .9rem; }

      
        .profile { display: flex; align-items: center; gap: 24px; }
        .avatar {
            width: 90px; height: 90px; border-radius: 50%; flex-shrink: 0;
            background: var(--pink-200); color: var(--pink-600);
            font-size: 2.4rem; font-weight: 700;
            display: flex; align-items: center; justify-content: center;
        }

       
        .table-wrap {
            overflow-x: auto; background: #fff; border: 1px solid var(--pink-100);
            border-radius: 18px; box-shadow: 0 4px 14px rgba(236, 122, 160, .08);
        }
        table.data { width: 100%; border-collapse: collapse; min-width: 560px; font-size: .92rem; }
        table.data th { background: var(--pink-100); text-align: left; padding: 13px 16px; color: var(--pink-600); }
        table.data td { padding: 13px 16px; border-top: 1px solid var(--pink-100); }
        table.data tbody tr:hover { background: var(--pink-50); }
        .badge { background: var(--pink-100); color: var(--pink-600); padding: 3px 10px; border-radius: 999px; font-size: .78rem; font-weight: 600; }

        
        .profile-header { display: flex; align-items: center; gap: 24px; margin-bottom: 20px; }
        .profile-name { font-size: 1.4rem; color: var(--pink-600); }
        .profile-role { color: var(--teks-lembut); margin-bottom: 14px; }
        .mini-stats { display: flex; flex-wrap: wrap; gap: 12px; }
        .mini-stat {
            background: var(--pink-50); border: 1px solid var(--pink-100);
            border-radius: 14px; padding: 8px 16px; text-align: center; min-width: 90px;
        }
        .mini-stat strong { display: block; font-size: 1.3rem; color: var(--pink-600); }
        .mini-stat span { font-size: .78rem; color: var(--teks-lembut); }

        .profile-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 22px; }
        .info-list, .fav-list { list-style: none; }
        .info-list li {
            display: flex; justify-content: space-between; gap: 12px;
            padding: 10px 0; border-bottom: 1px solid var(--pink-100); font-size: .92rem;
        }
        .info-list li:last-child { border-bottom: 0; }
        .info-list span { color: var(--teks-lembut); }
        .tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 22px; }
        .fav-list li { padding: 10px 0; border-bottom: 1px solid var(--pink-100); font-size: .92rem; }
        .fav-list li:last-child { border-bottom: 0; }
        .fav-list small { display: block; color: var(--teks-lembut); }

       
        .footer { text-align: center; color: var(--teks-lembut); font-size: .85rem; padding: 20px; border-top: 1px solid var(--pink-100); background: #fff; }

       
        @media (max-width: 600px) {
            .navbar-inner { flex-direction: column; align-items: flex-start; }
            .page-title { font-size: 1.4rem; }
            .card { padding: 18px; }
            .profile { flex-direction: column; text-align: center; }
            .profile-header { flex-direction: column; text-align: center; }
            .mini-stats { justify-content: center; }
            .profile-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    {{-- Navbar dipanggil pakai @include --}}
    @include('components.navbar')

    {{-- Isi tiap halaman akan masuk ke sini --}}
    <main class="main">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- Footer dipanggil sebagai Blade Component --}}
    <x-footer />

</body>
</html>