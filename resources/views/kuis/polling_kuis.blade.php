
@extends('konfigurasi')

@section('content')

<section id="kuis" class="about">
    <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>POLLING</h2>
          </div>

          <div class="row">
              <div class="col-lg-12 ms-lg-4">

                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title" style="display: inline-block;">Polling Kuisioner Tracer Study</h5>
                        </div>
                        <hr>
                        <form method="GET" action="{{ route('polling') }}">
                            <div class="mb-3">
                                <label for="prodi" class="form-label">Pilih Prodi</label>
                                <select id="prodi" name="prodi" class="form-select">
                                    <option value="">-- Semua Prodi --</option>
                                    <option value="D3-PERIKLANAN" {{ old('prodi') == 'D3-PERIKLANAN' ? 'selected' : '' }}>D3-PERIKLANAN</option>
                                    <option value="D3-FOTOGRAFI" {{ old('prodi') == 'D3-FOTOGRAFI' ? 'selected' : '' }}>D3-FOTOGRAFI</option>
                                    <option value="D3-PENYIARAN" {{ old('prodi') == 'D3-PENYIARAN' ? 'selected' : '' }}>D3-PENYIARAN</option>
                                    <option value="D3-PENERBITAN" {{ old('prodi') == 'D3-PENERBITAN' ? 'selected' : '' }}>D3-PENERBITAN</option>
                                    <option value="D4-ANIMASI" {{ old('prodi') == 'D4-ANIMASI' ? 'selected' : '' }}>D4-ANIMASI</option>
                                    <option value="D3-PEMELIHARAAN MESIN" {{ old('prodi') == 'D3-PEMELIHARAAN MESIN' ? 'selected' : '' }}>D3-PEMELIHARAAN MESIN</option>
                                    <option value="D4-PENGELOLAAN PERHOTELAN" {{ old('prodi') == 'D4-PENGELOLAAN PERHOTELAN' ? 'selected' : '' }}>D4-PENGELOLAAN PERHOTELAN</option>
                                    <option value="D4-DESAIN MODE" {{ old('prodi') == 'D4-DESAIN MODE' ? 'selected' : '' }}>D4-DESAIN MODE</option>
                                    <option value="D3-TEKNIK KEMASAN" {{ old('prodi') == 'D3-TEKNIK KEMASAN' ? 'selected' : '' }}>D3-TEKNIK KEMASAN</option>
                                    <option value="D3-TEKNIK GRAFIKA" {{ old('prodi') == 'D3-TEKNIK GRAFIKA' ? 'selected' : '' }}>D3-TEKNIK GRAFIKA</option>
                                    <option value="D3-DESAIN GRAFIS" {{ old('prodi') == 'D3-DESAIN GRAFIS' ? 'selected' : '' }}>D3-DESAIN GRAFIS</option>
                                    <option value="D4-TEKNOLOGI PERMAINAN" {{ old('prodi') == 'D4-TEKNOLOGI PERMAINAN' ? 'selected' : '' }}>D4-TEKNOLOGI PERMAINAN</option>
                                    <option value="D3-SENI KULINER" {{ old('prodi') == 'D3-SENI KULINER' ? 'selected' : '' }}>D3-SENI KULINER</option>
                                    <option value="D4-TEKNOLOGI REKAYASA MULTIMEDIA" {{ old('prodi') == 'D4-TEKNOLOGI REKAYASA MULTIMEDIA' ? 'selected' : '' }}>D4-TEKNOLOGI REKAYASA MULTIMEDIA</option>
                                    <option value="D4-TEKNOLOGI REKAYASA PENGEMASAN" {{ old('prodi') == 'D4-TEKNOLOGI REKAYASA PENGEMASAN' ? 'selected' : '' }}>D4-TEKNOLOGI REKAYASA PENGEMASAN</option>
                                    <option value="D3-PENERBITAN (KAMPUS KOTA MEDAN)" {{ old('prodi') == 'D3-PENERBITAN (KAMPUS KOTA MEDAN)' ? 'selected' : '' }}>D3-PENERBITAN (KAMPUS KOTA MEDAN)</option>
                                    <option value="D3-PERIKLANAN (KAMPUS KOTA MAKASSAR)" {{ old('prodi') == 'D3-PERIKLANAN (KAMPUS KOTA MAKASSAR)' ? 'selected' : '' }}>D3-PERIKLANAN (KAMPUS KOTA MAKASSAR)</option>
                                    <option value="D3-PENERBITAN (KAMPUS KOTA MAKASSAR)" {{ old('prodi') == 'D3-PENERBITAN (KAMPUS KOTA MAKASSAR)' ? 'selected' : '' }}>D3-PENERBITAN (KAMPUS KOTA MAKASSAR)</option>
                                    <option value="D3-PERIKLANAN (KAMPUS KOTA MEDAN)" {{ old('prodi') == 'D3-PERIKLANAN (KAMPUS KOTA MEDAN)' ? 'selected' : '' }}>D3-PERIKLANAN (KAMPUS KOTA MEDAN)</option>
                                    <option value="D4-PRODUKSI FILM DAN TELEVISI" {{ old('prodi') == 'D4-PRODUKSI FILM DAN TELEVISI' ? 'selected' : '' }}>D4-PRODUKSI FILM DAN TELEVISI</option>
                                    <option value="D3-TEKNIK GRAFIKA (KAMPUS KOTA MAKASSAR)" {{ old('prodi') == 'D3-TEKNIK GRAFIKA (KAMPUS KOTA MAKASSAR)' ? 'selected' : '' }}>D3-TEKNIK GRAFIKA (KAMPUS KOTA MAKASSAR)</option>
                                    <option value="D3-DESAIN GRAFIS (KAMPUS KOTA MAKASSAR)" {{ old('prodi') == 'D3-DESAIN GRAFIS (KAMPUS KOTA MAKASSAR)' ? 'selected' : '' }}>D3-DESAIN GRAFIS (KAMPUS KOTA MAKASSAR)</option>
                                    <option value="D3-TEKNIK GRAFIKA (KAMPUS KOTA MEDAN)" {{ old('prodi') == 'D3-TEKNIK GRAFIKA (KAMPUS KOTA MEDAN)' ? 'selected' : '' }}>D3-TEKNIK GRAFIKA (KAMPUS KOTA MEDAN)</option>
                                    <option value="D3-DESAIN GRAFIS (KAMPUS KOTA MEDAN)" {{ old('prodi') == 'D3-DESAIN GRAFIS (KAMPUS KOTA MEDAN)' ? 'selected' : '' }}>D3-DESAIN GRAFIS (KAMPUS KOTA MEDAN)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Lihat Hasil Polling</button>
                        </form>

                        <hr>

                      <!-- Table with stripped rows -->
                      <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        Prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 1 : Jelaskan status Anda saat ini? </h5>
                                        <canvas id="pollingChartQ1" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 3 : Berapa rata-rata pendapatan Anda per bulan? (take home pay)</h5>
                                        <canvas id="pollingChartQ2" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 5 : Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang?  </h5>
                                        <canvas id="pollingChartQ3" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        Prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 7 : Apa tingkat tempat kerja Anda? </h5>
                                        <canvas id="pollingChartQ4" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 8 : Seberapa erat hubungan bidang studi dengan pekerjaan Anda? </h5>
                                        <canvas id="pollingChartQ5" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 9 : Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?  </h5>
                                        <canvas id="pollingChartQ6" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        Prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 10 : Sebutkan sumberdana dalam pembiayaan kuliah? * (bukan ketika Studi Lanjut)  </h5>
                                        <canvas id="pollingChartQ7" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 13 : Kapan Anda mulai mencari pekerjaan? (Mohon pekerjaan sambilan tidak dimasukkan) </h5>
                                        <canvas id="pollingChartQ8" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        prodi : {{ $selectedProdi }}
                                        <hr>
                                        <h5 class="card-title text-center">Soal 18 :  Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir ?  </h5>
                                        <canvas id="pollingChartQ9" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>




                      <!-- End Table with stripped rows -->

                    </div>
                 </div>

              </div>
          </div>

    </div>


</section><!-- End About Section -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>


<script>
    // Chart for Q1
    const ctxQ1 = document.getElementById('pollingChartQ1').getContext('2d');
    const pollingChartQ1 = new Chart(ctxQ1, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($labelsQ1) !!},
            datasets: [{
                label: 'Hasil Polling Soal 1',
                data: {!! json_encode($dataQ1) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Status Alumni'
                },
                datalabels: {
                    formatter: (value, context) => {
                        return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                    },
                    color: '#36A2EB', // Ubah warna sesuai keinginan
                }
            }
        },
        plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
    });

    // Chart for Q2
    const ctxQ2 = document.getElementById('pollingChartQ2').getContext('2d');
    const pollingChartQ2 = new Chart(ctxQ2, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($labelsQ2) !!},
            datasets: [{
                label: 'Hasil Polling Soal 3',
                data: {!! json_encode($dataQ2) !!},
                backgroundColor: [
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 159, 64, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(201, 203, 207, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Rata-rata pendapatan alumni per bulan (take home pay)'
                },
                datalabels: {
                    formatter: (value, context) => {
                        return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                    },
                    color: '#FF6384', // Ubah warna sesuai keinginan
                }
            }
        },
        plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
    });

     // Chart for Q3
    const ctxQ3 = document.getElementById('pollingChartQ3').getContext('2d');
    const pollingChartQ3 = new Chart(ctxQ3, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($labelsQ3) !!},
            datasets: [{
                label: 'Hasil Polling Soal 5',
                data: {!! json_encode($dataQ3) !!},
                backgroundColor: [
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 159, 64, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(201, 203, 207, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang? '
                },
                datalabels: {
                    formatter: (value, context) => {
                        return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                    },
                    color: '#FF6384', // Ubah warna sesuai keinginan
                }
            }
        },
        plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
    });
    // Chart for Q4
    const ctxQ4 = document.getElementById('pollingChartQ4').getContext('2d');
    const pollingChartQ4 = new Chart(ctxQ4, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($labelsQ4) !!},
            datasets: [{
                label: 'Hasil Polling Soal 7',
                data: {!! json_encode($dataQ4) !!},
                backgroundColor: [
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(201, 203, 207, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Tingkat tempat kerja '
                },
                datalabels: {
                    formatter: (value, context) => {
                        return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                    },
                    color: '#FFCE56', // Ubah warna sesuai keinginan
                }
            }
        },
        plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
    });

    // Chart for Q5
    const ctxQ5 = document.getElementById('pollingChartQ5').getContext('2d');
    const pollingChartQ5 = new Chart(ctxQ5, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($labelsQ5) !!},
            datasets: [{
                label: 'Hasil Polling Soal 8',
                data: {!! json_encode($dataQ5) !!},
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(201, 203, 207, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Hubungan erat bidang studi dengan pekerjaan'
                },
                datalabels: {
                    formatter: (value, context) => {
                        return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                    },
                    color: '#36A2EB', // Ubah warna sesuai keinginan
                }
            }
        },
        plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
    });

    // Chart for Q6
    const ctxQ6 = document.getElementById('pollingChartQ6').getContext('2d');
    const pollingChartQ6 = new Chart(ctxQ6, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($labelsQ6) !!},
            datasets: [{
                label: 'Hasil Polling Soal 9',
                data: {!! json_encode($dataQ6) !!},
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(201, 203, 207, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Tingkat pendidikan apa yang paling tepat/sesuai pekerjaan saat ini'
                },
                datalabels: {
                    formatter: (value, context) => {
                        return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                    },
                    color: '#FF6384', // Ubah warna sesuai keinginan
                }
            }
        },
        plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
    });
    // Chart for Q7
const ctxQ7 = document.getElementById('pollingChartQ7').getContext('2d');
const pollingChartQ7 = new Chart(ctxQ7, {
    type: 'doughnut',
    data: {
        labels: {!! json_encode($labelsQ7) !!},
        datasets: [{
            label: 'Hasil Polling Soal 10',
            data: {!! json_encode($dataQ7) !!},
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: ' Sumberdana dalam pembiayaan kuliah di Polimedia? '
            },
            datalabels: {
                formatter: (value, context) => {
                    return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                },
                color: '#36A2EB', // Ubah warna sesuai keinginan
            }
        }
    },
    plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
});

// Chart for Q8
const ctxQ8 = document.getElementById('pollingChartQ8').getContext('2d');
const pollingChartQ8 = new Chart(ctxQ8, {
    type: 'doughnut',
    data: {
        labels: {!! json_encode($labelsQ8) !!},
        datasets: [{
            label: 'Hasil Polling Soal 13',
            data: {!! json_encode($dataQ8) !!},
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Mulai mencari pekerjaan'
            },
            datalabels: {
                formatter: (value, context) => {
                    return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                },
                color: '#FF6384', // Ubah warna sesuai keinginan
            }
        }
    },
    plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
});

// Chart for Q9
const ctxQ9 = document.getElementById('pollingChartQ9').getContext('2d');
const pollingChartQ9 = new Chart(ctxQ9, {
    type: 'doughnut',
    data: {
        labels: {!! json_encode($labelsQ9) !!},
        datasets: [{
            label: 'Hasil Polling Soal 12',
            data: {!! json_encode($dataQ9) !!},
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(201, 203, 207, 0.2)',
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(201, 203, 207, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Hasil Polling Soal 12'
            },
            datalabels: {
                formatter: (value, context) => {
                    return value.toFixed(2) + '%'; // Format nilai sebagai persentase
                },
                color: '#FFCE56', // Ubah warna sesuai keinginan
            }
        }
    },
    plugins: [ChartDataLabels] // Tambahkan plugin untuk menampilkan label
});

</script>

@endsection
