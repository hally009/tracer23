<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->id();
            $table->string('id_akun')->unique();
            $table->string('q1');  // 1. Status pekerjaan
            $table->string('1a');  // 2. Dalam berapa bulan Anda mendapatkan pekerjaan pertama ?
            $table->string('thp1');  // 3. Berapa rata-rata pendapatan Anda per bulan? (take home pay)
            $table->string('provinsi');  // 4. Dimana lokasi tempat Anda bekerja?
            $table->string('kabupaten');  // 4. Dimana lokasi tempat Anda bekerja?
            $table->string('1d');  // 5. Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang?
            $table->string('custom_1d')->nullable();
            $table->string('1e');  // 6. Apa nama perusahaan/kantor tempat Anda bekerja?
            $table->string('1f');  // 7. Apa tingkat tempat kerja Anda?
            $table->string('1g');  // 8. Seberapa erat hubungan bidang studi dengan pekerjaan Anda?
            $table->string('1h');  // 9. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
            $table->string('q2');  // 10. Sumber dana
            $table->string('custom2')->nullable();  // Custom input for q2 if 'Lainnya' is selected
            $table->string('etika_a');  // etika a
            $table->string('etika_b');  // etika b
            $table->string('ilmu_a');  // ilmu a
            $table->string('ilmu_b');  // ilmu b
            $table->string('bing_a');  // bing a
            $table->string('bing_b');  // bing b
            $table->string('ti_a');  // ti a
            $table->string('ti_b');  // ti b
            $table->string('kom_a');  // kom a
            $table->string('kom_b');  // kom b
            $table->string('tim_a');  // tim a
            $table->string('tim_b');  // tim b
            $table->string('dev_a');  // dev a
            $table->string('dev_b');  // dev b
            $table->string('perkuliahan');  // perkuliahan
            $table->string('demonstrasi');  // demonstrasi
            $table->string('riset');  // riset
            $table->string('magang');  // magang
            $table->string('praktikum');  // praktikum
            $table->string('kerja_lapangan');  // kerja_lapangan
            $table->string('diskusi');  // diskusi
            $table->string('q5');  // magang
            $table->json('search_method')->nullable();  // Search methods (checkbox, multiple selections)
            $table->string('other_search_method')->nullable();  // Custom search method if 'Lainnya' is selected
            $table->string('q7');  // 15. Berapa perusahaan/instansi/institusi yang sudah Anda lamar
            $table->string('q8'); // 16. Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda ?
            $table->string('q9'); // 17. Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara ?
            $table->string('q10'); // 18. Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir ?
            $table->string('lainnya_q10')->nullable();  // Custom input for q2 if 'Lainnya' is selected no. 10
            $table->json('q11')->nullable();  // Search methods (checkbox, multiple selections)
            $table->string('other_q11')->nullable();  // Custom search method if 'Lainnya' is selected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuis');
    }
};
