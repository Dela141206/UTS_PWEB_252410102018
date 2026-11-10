<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman login
    public function loginPage()
    {
        return view('login');
    }

    // Memproses login: cek username, lalu kirim ke dashboard lewat URL
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50'
        ]);

        return redirect()->route('dashboard', [
            'username' => $request->username
        ]);
    }

    // Menampilkan dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        $buku = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'kategori' => 'Novel',
                'tahun' => 2005,
                'stok' => 10
            ],
            [
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fantasi',
                'tahun' => 2014,
                'stok' => 8
            ],
            [
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'stok' => 5
            ],
            [
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'stok' => 12
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'kategori' => 'Novel',
                'tahun' => 2009,
                'stok' => 7
            ],
        ];

        $totalBuku = count($buku);
        $totalStok = array_sum(array_column($buku, 'stok'));
        $totalKategori = count(array_unique(array_column($buku, 'kategori')));

        return view('dashboard', compact(
            'username',
            'totalBuku',
            'totalStok',
            'totalKategori'
        ));
    }

    // Menampilkan profile
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        
        $infoAkun = [
            'Username'        => $username,
            'Status'          => 'Anggota Aktif',
            'Bergabung sejak' => 'Januari 2026',
            'Hobi'            => 'Membaca di sore hari',
        ];

      
        $statistik = [
            ['angka' => 24, 'label' => 'Buku Dibaca'],
            ['angka' => 5,  'label' => 'Favorit'],
            ['angka' => 8,  'label' => 'Wishlist'],
        ];

   
        $genreFavorit = ['Novel', 'Fantasi', 'Pengembangan Diri'];

      
        $bukuFavorit = [
            ['judul' => 'Laskar Pelangi',  'penulis' => 'Andrea Hirata'],
            ['judul' => 'Atomic Habits',   'penulis' => 'James Clear'],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi'],
        ];

        return view('profile', compact(
            'username',
            'infoAkun',
            'statistik',
            'genreFavorit',
            'bukuFavorit'
        ));
    }

    // Menampilkan pengelolaan buku
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Pengguna');

        $buku = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'kategori' => 'Novel',
                'tahun' => 2005,
                'stok' => 10
            ],
            [
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fantasi',
                'tahun' => 2014,
                'stok' => 8
            ],
            [
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'stok' => 5
            ],
            [
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'stok' => 12
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'kategori' => 'Novel',
                'tahun' => 2009,
                'stok' => 7
            ],
        ];

        return view('pengelolaan', compact('username', 'buku'));
    }
}