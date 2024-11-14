<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    use HasFactory;
    protected $fillable = ['id_buku', 'nama', 'judul_buku', 'tanggal_pinjam', 'tanggal_kembali', 'status'];
}
