<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengunjungs = [
            [
                'id_buku' => 1,
                'nama' => 'Budi',
                'judul_buku' => 'HarryPotter',
                'tanggal_pinjam' => '2024-11-07',
                'tanggal_kembali' => '2024-11-14'
            ]
        ];

        foreach ($pengunjungs as $pengunjung) {
            Pengunjung::create($pengunjung);
        }
    }
}
