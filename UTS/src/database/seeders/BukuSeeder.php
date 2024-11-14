<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;


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
                'judul_buku' => 'HarryPotter',
                'penulis' => 'jhon',
                'tahun_terbit' => '2024'
            ]
        ];
        foreach ($bukus as $buku) {
            Buku::create($buku);
        }
    }
}
