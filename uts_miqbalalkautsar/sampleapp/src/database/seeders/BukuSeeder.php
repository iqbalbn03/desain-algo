<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukus = [
            [
                'genre' => 'fiksi',
                'judul_buku' => 'Harry Potter',
                'penulis' => 'J.K. Rowling',
                'tahun_terbit' => '1997',
            ],
            [
                'genre' => 'non-fiksi',
                'judul_buku' => 'Sapiens: A Brief History of Humankind',
                'penulis' => 'Yuval Noah Harari',
                'tahun_terbit' => '2011',
            ],
            [
                'genre' => 'biografi',
                'judul_buku' => 'The Diary of a Young Girl',
                'penulis' => 'Anne Frank',
                'tahun_terbit' => '1947',
            ],
        ];
        foreach ($bukus as $buku) {
            Buku::create($buku);
        }
    }
}
