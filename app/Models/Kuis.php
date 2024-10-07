<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'kuis';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'id_akun',
        'q1',
        '1a',  // 2. Dalam berapa bulan Anda mendapatkan pekerjaan pertama ?
        'thp1',  // 3. Berapa rata-rata pendapatan Anda per bulan? (take home pay)
        'provinsi',  // 4. Dimana lokasi tempat Anda bekerja?
        'kabupaten',  // 4. Dimana lokasi tempat Anda bekerja?
        '1d',  // 5. Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang?
        'custom_1d',
        '1e',  // 6. Apa nama perusahaan/kantor tempat Anda bekerja?
        '1f',  // 7. Apa tingkat tempat kerja Anda?
        '1g', // 8. Seberapa erat hubungan bidang studi dengan pekerjaan Anda?
        '1h',  // 9. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
        'q2',
        'custom2',
        'etika_a',
        'etika_b',
        'ilmu_a',
        'ilmu_b',
        'bing_a',
        'bing_b',
        'ti_a',
        'ti_b',
        'kom_a',
        'kom_b',
        'tim_a',
        'tim_b',
        'dev_a',
        'dev_b',
        'perkuliahan',
        'demonstrasi',
        'riset',
        'magang',
        'praktikum',
        'kerja_lapangan',
        'diskusi',
        'q5',
        'search_method',
        'other_search_method',
        'q7',
        'q8',
        'q9',
        'q10',
        'lainnya_q10',
        'q11',
        'other_q11',
    ];

    // Specify that the `search_method` and `q11` fields are stored as JSON
    protected $casts = [
        'search_method' => 'array',
        'q11' => 'array',
    ];

    // Add any relationships or additional logic for the model if necessary

    public function alumnus()
    {
        return $this->belongsTo(Alumni::class, 'id_akun', 'id_akun');
    }


}
