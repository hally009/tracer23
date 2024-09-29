@extends('konfigurasi')

@section('content')

<!-- ======= About Section ======= -->
<section id="alumni" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>RESPONDEN</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 ms-lg-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <!--
                        <div>
                            <h5 class="card-title" style="display: inline-block;">Export Excel</h5>
                            <a href="{{ route('export.kuis') }}" class="btn btn-outline-primary float-sm-end">Export Excel</a>
                        </div>
                        -->
                        <hr>

                        <!-- Membuat tabel bisa di-scroll secara horizontal -->
                        <div class="table-responsive">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Alumni</th>
                                        <th scope="col">Soal 1</th>
                                        <th scope="col">Soal 2</th>
                                        <th scope="col">Jawaban lain 2</th>
                                        <th scope="col">Soal 3 : Etika A</th>
                                        <th scope="col">Soal 3 : Etika B</th>
                                        <th scope="col">Soal 3 : Keahlian A</th>
                                        <th scope="col">Soal 3 : Keahlian B</th>
                                        <th scope="col">Soal 3 : B Inggris A</th>
                                        <th scope="col">Soal 3 : B Inggris B</th>
                                        <th scope="col">Soal 3 : TI A</th>
                                        <th scope="col">Soal 3 : TI B</th>
                                        <th scope="col">Soal 3 : Komunikasi A</th>
                                        <th scope="col">Soal 3 : Komunikasi B</th>
                                        <th scope="col">Soal 3 : Tim A</th>
                                        <th scope="col">Soal 3 : Tim B</th>
                                        <th scope="col">Soal 3 : Pengembangan A</th>
                                        <th scope="col">Soal 3 : Pengembangan B</th>
                                        <th scope="col">Soal 4 : Perkulihan</th>
                                        <th scope="col">Soal 4 : Demonstrasi</th>
                                        <th scope="col">Soal 4 : Riset</th>
                                        <th scope="col">Soal 4 : Magang</th>
                                        <th scope="col">Soal 4 : Praktikum</th>
                                        <th scope="col">Soal 4 : Kerja Lapangan</th>
                                        <th scope="col">Soal 4 : Diskusi</th>
                                        <th scope="col">Soal 5</th>
                                        <th scope="col">Soal 6</th>
                                        <th scope="col">Jawaban Lainnya 6</th>
                                        <th scope="col">Soal 7</th>
                                        <th scope="col">Soal 8</th>
                                        <th scope="col">Soal 9</th>
                                        <th scope="col">Soal 10</th>
                                        <th scope="col">Jawaban Lainnya 10</th>
                                        <th scope="col">Soal 11</th>
                                        <th scope="col">Jawaban Lainnya 11</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kuis as $item)
                                        <tr>
                                            <!-- Menampilkan nama responden dari tabel alumnis -->
                                            <td>{{ $item->alumnus->nama }}</td> <!-- Menggunakan relasi 'alumnus' -->
                                            <td>{{ $item->q1 }}</td>
                                            <td>{{ $item->q2 }}</td>
                                            <td>{{ $item->custom2 }}</td>
                                            <td>{{ $item->etika_a }}</td>
                                            <td>{{ $item->etika_b }}</td>
                                            <td>{{ $item->ilmu_a }}</td>
                                            <td>{{ $item->ilmu_b }}</td>
                                            <td>{{ $item->bing_a }}</td>
                                            <td>{{ $item->bing_b }}</td>
                                            <td>{{ $item->ti_a }}</td>
                                            <td>{{ $item->ti_b }}</td>
                                            <td>{{ $item->kom_a }}</td>
                                            <td>{{ $item->kom_b }}</td>
                                            <td>{{ $item->tim_a }}</td>
                                            <td>{{ $item->tim_b }}</td>
                                            <td>{{ $item->dev_a }}</td>
                                            <td>{{ $item->dev_b }}</td>
                                            <td>{{ $item->perkuliahan }}</td>
                                            <td>{{ $item->demonstrasi }}</td>
                                            <td>{{ $item->riset }}</td>
                                            <td>{{ $item->magang }}</td>
                                            <td>{{ $item->praktikum }}</td>
                                            <td>{{ $item->kerja_lapangan }}</td>
                                            <td>{{ $item->diskusi }}</td>
                                            <td>{{ $item->q5 }}</td>
                                            <td>
                                                @foreach($item->search_method as $method)
                                                    {{ $method }}<br>
                                                @endforeach
                                            </td>
                                            <td>{{ $item->other_search_method }}</td>
                                            <td>{{ $item->q7 }}</td>
                                            <td>{{ $item->q8 }}</td>
                                            <td>{{ $item->q9 }}</td>
                                            <td>{{ $item->q10 }}</td>
                                            <td>{{ $item->lainnya_q10 }}</td>
                                            <td>
                                                @foreach($item->q11 as $s11)
                                                    {{ $s11 }}<br>
                                                @endforeach
                                            </td>
                                            <td>{{ $item->other_q11 }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="18" class="text-center">Tidak ada data kuis...</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div> <!-- Akhir dari div table-responsive -->

                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- End About Section -->

@endsection
