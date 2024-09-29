<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis'; // Menunjukkan tabel yang benar

    protected $fillable = [
        'id_akun',
        'nim',
        'nama',
        'prodi',
        'nik',
        'npwp',
        'no_ijazah',
        'no_hp',
        'email',
    ];
}
