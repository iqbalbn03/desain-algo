<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggans = [
            [
                'id_buku' => 1,
                'nama' => 'M iqbal Al kautsar',
                'telp' => '08123456789',
                'alamat' => 'Jl. Raya No. 1',
                'judul_buku' => 'Buku A',
                'tanggal_pinjam' => '2024-11-07',
                'tanggal_kembali' => '2024-11-14',

            ],

        ];
        foreach ($pelanggans as $pelanggan) {
            Pelanggan::create($pelanggan);
        }
    }
}
