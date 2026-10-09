<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title'   => 'Pengalaman Pertama Belajar Laravel',
                'content' => 'Awalnya bingung dengan struktur foldernya yang banyak. Setelah paham alur route, controller, dan view, ternyata semuanya saling terhubung dengan rapi.',
            ],
            [
                'title'   => 'Kenapa Pakai Blade Layout?',
                'content' => 'Dengan layout master, kita cukup menulis navbar dan footer sekali saja. Semua halaman tinggal memakai @extends sehingga tampilannya konsisten.',
            ],
            [
                'title'   => 'Tips Mengatur Waktu Kuliah dan Tugas',
                'content' => 'Pecah tugas besar jadi bagian kecil dan kerjakan sedikit demi sedikit tiap hari. Cara ini membuat deadline terasa jauh lebih ringan.',
            ],
            [
                'title'   => 'Memahami CRUD dalam Pengembangan Web',
                'content' => 'CRUD adalah singkatan dari Create, Read, Update, dan Delete. Hampir semua aplikasi web memakai keempat operasi dasar ini.',
            ],
            [
                'title'   => 'Validasi Form Itu Penting',
                'content' => 'Jangan pernah percaya data dari pengguna begitu saja. Validasi di sisi server memastikan data yang masuk ke database sudah sesuai aturan.',
            ],
            [
                'title'   => 'Apa Itu Route Model Binding?',
                'content' => 'Fitur ini membuat Laravel mencari data berdasarkan ID di URL secara otomatis. Kita tidak perlu lagi menulis query pencarian manual di setiap method.',
            ],
            [
                'title'   => 'Belajar Git untuk Pemula',
                'content' => 'Git membantu kita menyimpan riwayat perubahan kode. Kebiasaan commit kecil dan sering akan menyelamatkan kita saat terjadi kesalahan.',
            ],
            [
                'title'   => 'Rencana Proyek Akhir Pemrograman Web',
                'content' => 'Aku dan kelompok sedang mencari ide web yang bermanfaat untuk banyak orang. Targetnya aplikasi yang sederhana tapi benar-benar dipakai.',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}