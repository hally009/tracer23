@extends('konfigurasi')

@section('content')

<!-- ======= About Section ======= -->
<section id="alumni" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>ALUMNI</h2>
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
                    @if(Auth::check() && Auth::user()->status === 'Puskar')
                        <div>
                            <h5 class="card-title" style="display: inline-block;">Daftar Alumni</h5>
                            <button type="button" class="btn btn-outline-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Alumni</button>
                        </div>
                    @endif
                        <hr>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">AKUN</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Prodi</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">NPWP</th>
                                    <th scope="col">No Ijazah</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Email</th>
                                    <!--<th scope="col">Aksi</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($alumni as $alumnus)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $alumnus->id_akun }}</td>
                                        <td>{{ $alumnus->nim }}</td>
                                        <td>{{ $alumnus->nama }}</td>
                                        <td>{{ $alumnus->prodi }}</td>
                                        <td>{{ $alumnus->nik }}</td>
                                        <td>{{ $alumnus->npwp }}</td>
                                        <td>{{ $alumnus->no_ijazah }}</td>
                                        <td>{{ $alumnus->no_hp }}</td>
                                        <td>{{ $alumnus->email }}</td>
                                        <!--<td>
                                            <i class="bx bxs-edit bx-sm" style="color:cornflowerblue;"></i>
                                            <i class="bx bxs-eraser bx-sm" style="color:cornflowerblue;"></i>
                                        </td>-->
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">Tidak ada data...</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- The Modal -->
<div class="modal" id="myModal" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Tambah Alumni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('alumni.store') }}" method="POST">
                <!-- Modal body -->
                <div class="modal-body">

                    @csrf

                    <div class="row mb-3">
                        <label for="id_akun" class="col-md-4 col-form-label text-md-end">AKUN</label>
                        <div class="col-md-6">
                            <select id="id_akun" class="form-control @error('id_akun') is-invalid @enderror" name="id_akun" required>
                                <option value="" disabled selected>Pilih Akun</option>
                                @foreach($users as $user)
                                    @if($user->status == 'Responden')
                                        <option value="{{ $user->id }}">{{ $user->id }}[{{ $user->name }}]</option>
                                    @endif
                                @endforeach
                            </select>

                            @error('id_akun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="nim" class="col-md-4 col-form-label text-md-end">NIM</label>
                        <div class="col-md-6">
                            <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required>

                            @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-md-4 col-form-label text-md-end">Nama</label>
                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required>

                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="prodi" class="col-md-4 col-form-label text-md-end">Prodi</label>
                        <div class="col-md-6">
                            <select id="prodi" class="form-control @error('prodi') is-invalid @enderror" name="prodi" required>
                                <option value="">-- Pilih Prodi --</option>
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

                            @error('prodi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="nik" class="col-md-4 col-form-label text-md-end">NIK</label>
                        <div class="col-md-6">
                            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required>

                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="npwp" class="col-md-4 col-form-label text-md-end">NPWP</label>
                        <div class="col-md-6">
                            <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp" value="{{ old('npwp') }}" required>

                            @error('npwp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_ijazah" class="col-md-4 col-form-label text-md-end">No Ijazah</label>
                        <div class="col-md-6">
                            <input id="no_ijazah" type="text" class="form-control @error('no_ijazah') is-invalid @enderror" name="no_ijazah" value="{{ old('no_ijazah') }}" required>

                            @error('no_ijazah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="no_hp" class="col-md-4 col-form-label text-md-end">No HP</label>
                        <div class="col-md-6">
                            <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required>

                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="id_akun" class="col-md-4 col-form-label text-md-end">EMAIL</label>
                        <div class="col-md-6">
                            <select id="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                                <option value="" disabled selected>Pilih Email</option>
                                @foreach($users as $user)
                                    @if($user->status == 'Responden')
                                        <option value="{{ $user->email }}">{{ $user->id }}[{{ $user->email }}]</option>
                                    @endif
                                @endforeach
                            </select>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary" id="submitButton">Tambah</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    @if($errors->any())
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        });
    @endif
</script>

@endsection
