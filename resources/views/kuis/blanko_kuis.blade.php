
@extends('konfigurasi')

@section('content')

<section id="kuis" class="about">
    <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>KUISIONER</h2>
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
                        <div>
                            <h5 class="card-title" style="display: inline-block;">Kuisioner Tracer Study</h5>
                        </div>
                        <hr>

                      <!-- Table with stripped rows -->
                        <div class="container mt-5">
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                        <form action="" method="POST" id="sliderForm">
                          <!-- Section 1 -->
                          @csrf
                          <div class="form-section current-section" id="section1">
                            <!-- Content for section 1 -->
                            <div class="card">
                              <div class="card-body">
                                <h5>IDENTITAS</h5>
                                <hr>
                                <!-- Add your form fields for section 1 here -->
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="hidden" id="id_akun" name="id_akun" value="{{ old('id_akun', $user->id ?? '') }}"
                                                   class="form-control @error('id_akun') is-invalid @enderror">

                                            <div class="mb-3" id="id1">
                                                <label class="form-label" for="nim"><strong>NIM</strong></label>
                                                <input type="text" id="nim" name="nim" value="{{ old('nim', $alumni->nim ?? '') }}"
                                                       class="form-control @error('nim') is-invalid @enderror" readonly>
                                                @error('nim')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3" id="id2">
                                                <label class="form-label" for="nama_responden"><strong>NAMA RESPONDEN</strong></label>
                                                <input type="text" id="nama_responden" name="nama_responden" value="{{ old('nama_responden', $alumni->nama ?? '') }}"
                                                       class="form-control @error('nama_responden') is-invalid @enderror" readonly>
                                                @error('nama_responden')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3" id="id3">
                                                <label class="form-label" for="program_studi"><strong>PROGRAM STUDI</strong></label>
                                                <input type="text" id="program_studi" name="program_studi" value="{{ old('program_studi', $alumni->prodi ?? '') }}"
                                                       class="form-control @error('program_studi') is-invalid @enderror" readonly>
                                                @error('program_studi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3" id="id4">
                                                <label class="form-label" for="nik"><strong>NIK</strong></label>
                                                <input type="text" id="nik" name="nik" value="{{ old('nik', $alumni->nik ?? '') }}"
                                                       class="form-control @error('nik') is-invalid @enderror" readonly>
                                                @error('nik')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3" id="id5">
                                                <label class="form-label" for="npwp"><strong>NPWP</strong></label>
                                                <input type="text" id="npwp" name="npwp" value="{{ old('npwp', $alumni->npwp ?? '') }}"
                                                       class="form-control @error('npwp') is-invalid @enderror" readonly>
                                                @error('npwp')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3" id="id6">
                                                <label class="form-label" for="no_ijazah"><strong>NOMOR IJAZAH</strong></label>
                                                <input type="text" id="no_ijazah" name="no_ijazah" value="{{ old('no_ijazah', $alumni->no_ijazah ?? '') }}"
                                                       class="form-control @error('no_ijazah') is-invalid @enderror" readonly>
                                                @error('no_ijazah')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3" id="id7">
                                                <label class="form-label" for="no_hp"><strong>NOMOR HP</strong></label>
                                                <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', $alumni->no_hp ?? '') }}"
                                                       class="form-control @error('no_hp') is-invalid @enderror" readonly>
                                                @error('no_hp')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3" id="id8">
                                                <label class="form-label" for="email"><strong>EMAIL</strong></label>
                                                <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}"
                                                       class="form-control @error('email') is-invalid @enderror" readonly>
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" onclick="moveSection(1)">Selanjutnya</button>
                          </div>

                          <!-- Section 2 -->
                          <div class="form-section" id="section2">
                            <!-- Content for section 2 -->
                            <div class="card">
                              <div class="card-body">
                                <h5>KUISIONER WAJIB</h5>
                                <hr>
                                <!-- Add your form fields for section 2 here -->
                                <div class="mb-3" id="soal1">
                                    <label class="form-label"><strong>1. Jelaskan status Anda saat ini? </strong></label>
                                    <div class="d-flex">
                                      <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="q1" id="q11" value="bekerja" {{ old('q1') == 'bekerja' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="q11">Bekerja (full time / part time)</label><br>

                                        <input class="form-check-input" type="radio" name="q1" id="q12" value="belum bekerja" {{ old('q1') == 'belum bekerja' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="q12">Belum memungkinkan bekerja</label><br>

                                        <input class="form-check-input" type="radio" name="q1" id="q13" value="wiraswasta" {{ old('q1') == 'wiraswasta' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="q13">Wiraswasta</label><br>

                                        <input class="form-check-input" type="radio" name="q1" id="q14" value="melanjutkan pendidikan" {{ old('q1') == 'melanjutkan pendidikan' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="q14">Melanjutkan Pendidikan</label><br>

                                        <input class="form-check-input" type="radio" name="q1" id="q15" value="mencari kerja" {{ old('q1') == 'mencari kerja' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="q15">Tidak kerja tetapi sedang mencari kerja</label>
                                      </div>
                                    </div>
                                    @error('q1')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" id="soal_1a">
                                    <label class="form-label"><strong>2. Dalam berapa bulan Anda mendapatkan pekerjaan pertama ?</strong></label>
                                    <input class="form-control" type="number" name="1a" id="1a" value="{{ old('1a') }}" placeholder="0">
                                    @error('1a')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" id="soal_1b">
                                    <label class="form-label"><strong>3. Berapa rata-rata pendapatan Anda per bulan? (take home pay)</strong></label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <select class="form-select" name="thp1" id="thp1">
                                                <option value="< 3000000" {{ old('thp1') == '< 3000000' ? 'selected' : '' }}>
                                                    < Rp. 3.000.000
                                                </option>
                                                <option value="3000001 - 7500000" {{ old('thp1') == '3000001 - 7500000' ? 'selected' : '' }}>
                                                    Rp. 3.000.001 - Rp. 7.500.000
                                                </option>
                                                <option value="> 7500001" {{ old('thp1') == '> 7500001' ? 'selected' : '' }}>
                                                    > Rp. 7.500.001
                                                </option>
                                            </select>
                                            @error('thp1')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3" id="soal_1c">
                                    <label class="form-label"><strong>4. Dimana lokasi tempat Anda bekerja?</strong></label>
                                    <div class="d-flex">
                                        <div class="form-group">
                                            <label for="provinsi" class="form-label" style="margin-left: 10%">Pilih Provinsi:</label>
                                            <select id="provinsi" name="provinsi" class="form-control" style="margin-left: 10%" onchange="updateKabupaten()">
                                                <option value="">-- Pilih Provinsi --</option>
                                                <option value="NAD">NAD (Aceh)</option>
                                                <option value="SUMUT">SUMUT (Sumatera Utara)</option>
                                                <option value="SUMBAR">SUMBAR (Sumatera Barat)</option>
                                                <option value="SUMSEL">SUMSEL (Sumatera Selatan)</option>
                                                <option value="Riau">Riau</option>
                                                <option value="KEPRI">KEPRI (Kepulauan Riau)</option>
                                                <option value="Jambi">Jambi</option>
                                                <option value="Bengkulu">Bengkulu</option>
                                                <option value="BABEL">BABEL (Bangka Belitung)</option>
                                                <option value="Lampung">Lampung</option>
                                                <option value="Banten">Banten</option>
                                                <option value="JABAR">JABAR (Jawa Barat)</option>
                                                <option value="JATENG">JATENG (Jawa Tengah)</option>
                                                <option value="JATIM">JATIM (Jawa Timur)</option>
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="DIY">DIY (Daerah Istimewa Yogyakarta)</option>
                                                <option value="Bali">Bali</option>
                                                <option value="NTB">NTB (Nusa Tenggara Barat)</option>
                                                <option value="NTT">NTT (Nusa Tenggara Timur)</option>
                                                <option value="KALBAR">KALBAR (Kalimantan Barat)</option>
                                                <option value="KALSEL">KALSEL (Kalimantan Selatan)</option>
                                                <option value="KALTENG">KALTENG (Kalimantan Tengah)</option>
                                                <option value="KALTIM">KALTIM (Kalimantan Timur)</option>
                                                <option value="KALTARA">KALTARA (Kalimantan Utara)</option>
                                                <option value="Gorontalo">Gorontalo</option>
                                                <option value="SULSEL">SULSEL (Sulawesi Selatan)</option>
                                                <option value="SULTRA">SULTRA (Sulawesi Tenggara)</option>
                                                <option value="SULTENG">SULTENG (Sulawesi Tengah)</option>
                                                <option value="SULUT">SULUT (Sulawesi Utara)</option>
                                                <option value="SULBAR">SULBAR (Sulawesi Barat)</option>
                                                <option value="MALUKU">MALUKU</option>
                                                <option value="MALUT">MALUKU UTARA</option>
                                                <option value="PAPUA">PAPUA</option>
                                                <option value="PAPUA_BARAT">PAPUA BARAT</option>
                                                <!-- Tambahkan provinsi lainnya di sini -->
                                            </select>
                                        </div>

                                        <div class="form-group" style="margin-left: 5%">
                                            <label for="kabupaten" class="form-label" style="margin-left: 5%">Pilih Kabupaten/Kota:</label>
                                            <select id="kabupaten" name="kabupaten" class="form-control" style="margin-left: 5%">
                                                <option value="">-- Pilih Kabupaten/Kota --</option>
                                                <!-- Kabupatan/Kota akan diisi berdasarkan provinsi yang dipilih -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3" id="soal_1d">
                                    <label class="form-label"><strong>5. Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang? </strong></label>
                                    <div class="d-flex">
                                      <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="1d" id="pemerintah" value="pemerintah" {{ old('1d') == 'pemerintah' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="pemerintah">Intansi pemerintah</label><br>

                                        <input class="form-check-input" type="radio" name="1d" id="non-profit" value="non-profit" {{ old('1d') == 'non-profit' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="non-profit">Organisasi non-profit/Lembaga Swadaya Masyarakat</label><br>

                                        <input class="form-check-input" type="radio" name="1d" id="swasta" value="swasta" {{ old('1d') == 'swasta' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="swasta">Perusahaan swasta</label><br>

                                        <input class="form-check-input" type="radio" name="1d" id="ppa" value="wiraswasta" {{ old('1d') == 'wiraswasta' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="wiraswasta">Wiraswasta/perusahaan sendiri</label><br>

                                        <input class="form-check-input" type="radio" name="1d" id="bumn" value="bumn" {{ old('1d') == 'bumn' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="bumn">BUMN/BUMD</label><br>

                                        <input class="form-check-input" type="radio" name="1d" id="multilateral" value="multilateral" {{ old('1d') == 'multilateral' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="multilateral">Institusi/Organisasi Multilateral</label><br>

                                        <input class="form-check-input" type="radio" name="1d" id="lainnya_1d" value="custom_1d" {{ old('1d') == 'custom_1d' ? 'checked' : '' }} onclick="toggleCustomInput_1d()">
                                        <label class="form-check-label" for="custom_1d">Lainnya, Tuliskan</label>

                                        <div id="custom-input_1d" style="display: none;">
                                            <input type="text"  class="form-control"  id="custom_1d" name="custom_1d" value="{{ old('custom_1d') }}">
                                        </div>

                                      </div>
                                    </div>
                                    @error('custom_1d')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" id="soal_1e">
                                    <label class="form-label"><strong>6. Apa nama perusahaan/kantor tempat Anda bekerja?</strong></label>
                                    <input class="form-control" type="text" name="1e" id="1e" value="{{ old('1e') }}" placeholder="tulis nama perusahaan">
                                    @error('1e')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" id="soal_1f">
                                    <label class="form-label"><strong>7. Apa tingkat tempat kerja Anda?</strong></label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <select class="form-select" name="1f" id="1f">
                                                <option value="">-- Pilih tingkat tempat kerja --</option>
                                                <option value="Lokal/Wilayah/Wiraswasta tidak berbadan hukum" {{ old('1f') == 'Lokal/Wilayah/Wiraswasta tidak berbadan hukum' ? 'selected' : '' }}>
                                                    Lokal/Wilayah/Wiraswasta tidak berbadan hukum
                                                </option>
                                                <option value="Nasional/Wiraswasta berbadan hukum" {{ old('1f') == 'Nasional/Wiraswasta berbadan hukum' ? 'selected' : '' }}>
                                                    Nasional/Wiraswasta berbadan hukum
                                                </option>
                                                <option value="Multinasional/Internasional" {{ old('1f') == 'Multinasional/Internasional' ? 'selected' : '' }}>
                                                    Multinasional/Internasional
                                                </option>
                                            </select>
                                            @error('1f')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3" id="soal_1g">
                                    <label class="form-label"><strong>8. Seberapa erat hubungan bidang studi dengan pekerjaan Anda?  </strong></label>
                                    <div class="d-flex">
                                      <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="1g" id="1g" value="Sangat Erat" {{ old('1g') == 'Sangat Erat' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1g">Sangat Erat</label><br>

                                        <input class="form-check-input" type="radio" name="1g" id="1g" value="Erat" {{ old('1g') == 'Erat' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1g">Erat</label><br>

                                        <input class="form-check-input" type="radio" name="1g" id="1g" value="Cukup Erat" {{ old('1g') == 'Cukup Erat' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1g">Cukup Erat</label><br>

                                        <input class="form-check-input" type="radio" name="1g" id="1g" value="Kurang Erat" {{ old('1g') == 'Kurang Erat' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1g">Kurang Erat</label><br>

                                        <input class="form-check-input" type="radio" name="1g" id="1g" value="Tidak Sama Sekali" {{ old('1g') == 'Tidak Sama Sekali' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1g">Tidak Sama Sekali</label>
                                      </div>
                                    </div>
                                    @error('1g')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" id="soal_1h">
                                    <label class="form-label"><strong>9. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?  </strong></label>
                                    <div class="d-flex">
                                      <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="1h" id="1h" value="Setingkat Lebih Tinggi" {{ old('1h') == 'Setingkat Lebih Tinggi' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1h">Setingkat Lebih Tinggi</label><br>

                                        <input class="form-check-input" type="radio" name="1h" id="1h" value="Tingkat yang Sama" {{ old('1h') == 'Tingkat yang Sama' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1h">Tingkat yang Sama</label><br>

                                        <input class="form-check-input" type="radio" name="1h" id="1h" value="Setingkat Lebih Rendah" {{ old('1h') == 'Setingkat Lebih Rendah' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1h">Setingkat Lebih Rendah</label><br>

                                        <input class="form-check-input" type="radio" name="1h" id="1h" value="Tidak Perlu Pendidikan Tinggi" {{ old('1h') == 'Tidak Perlu Pendidikan Tinggi' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="1h">Tidak Perlu Pendidikan Tinggi</label><br>
                                      </div>
                                    </div>
                                    @error('1h')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" id="soal2">
                                    <label class="form-label"><strong>10. Sebutkan sumberdana dalam pembiayaan kuliah? * (bukan ketika Studi Lanjut) </strong></label>
                                    <div class="d-flex">
                                      <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="q2" id="sendiri" value="biaya sendiri" {{ old('q2') == 'biaya sendiri' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="sendiri">Biaya Sendiri/Keluarga</label><br>

                                        <input class="form-check-input" type="radio" name="q2" id="adik" value="beasiswa adik" {{ old('q2') == 'beasiswa adik' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="adik">Beasiswa ADIK</label><br>

                                        <input class="form-check-input" type="radio" name="q2" id="bidikmisi" value="beasiswa bidikmisi" {{ old('q2') == 'beasiswa bidikmisi' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="bidikmisi">Beasiswa BIDIKMISI/KIPK</label><br>

                                        <input class="form-check-input" type="radio" name="q2" id="ppa" value="beasiswa ppa" {{ old('q2') == 'beasiswa ppa' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="ppa">Beasiswa PPA</label><br>

                                        <input class="form-check-input" type="radio" name="q2" id="afirmasi" value="beasiswa afirmasi" {{ old('q2') == 'beasiswa afirmasi' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="afirmasi">Beasiswa AFIRMASI</label><br>

                                        <input class="form-check-input" type="radio" name="q2" id="swasta" value="beasiswa swasta" {{ old('q2') == 'beasiswa swasta' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="swasta">Beasiswa Perusahaan/Swasta</label><br>

                                        <input class="form-check-input" type="radio" name="q2" id="slainnya" value="custom" {{ old('q2') == 'custom' ? 'checked' : '' }} onclick="toggleCustomInput()">
                                        <label class="form-check-label" for="slainnya">Lainnya, Tuliskan</label>

                                        <div id="custom-input2" style="display: none;">
                                            <input type="text"  class="form-control"  id="q-custom2" name="custom2" value="{{ old('custom2') }}">
                                        </div>

                                      </div>
                                    </div>
                                    @error('custom2')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3" id="soal3">
                                    <label class="form-label"><strong>11. Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda : kuasai? (A) Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B) *</strong></label>
                                    <div class="container">
                                      <!-- Header row for labels A and B -->
                                      <div class="row d-flex align-items-center">
                                        <div class="col-5">
                                          <label class="form-label" for="a"><strong>A</strong></label>
                                        </div>
                                        <div class="col-2">
                                          <!-- Spasi -->
                                        </div>
                                        <div class="col-5">
                                          <label class="form-label" for="b"><strong>B</strong></label>
                                        </div>
                                      </div>
                                      <hr>

                                      <!-- Row for rating scale labels -->
                                      <div class="row d-flex align-items-center">
                                        <div class="col-3">
                                          <label class="form-label"><strong>Sangat Rendah</strong></label>
                                        </div>
                                        <div class="col-2">
                                          <label class="form-label"><strong>Sangat Tinggi</strong></label>
                                        </div>
                                        <div class="col-2">
                                          <!-- Spasi -->
                                        </div>
                                        <div class="col-3">
                                          <label class="form-label"><strong>Sangat Rendah</strong></label>
                                        </div>
                                        <div class="col-2">
                                          <label class="form-label"><strong>Sangat Tinggi</strong></label>
                                        </div>
                                      </div>
                                      <hr>
                                      <!-- Example row for competencies with radio buttons -->
                                      <div class="row d-flex align-items-center">
                                        <!-- Column for the first set of radio buttons for A -->
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_a" id="etika_a1" value="1" {{ old('etika_a') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_a" id="etika_a2" value="2" {{ old('etika_a') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_a" id="etika_a3" value="3" {{ old('etika_a') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_a" id="etika_a4" value="4" {{ old('etika_a') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_a" id="etika_a5" value="5" {{ old('etika_a') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('etika_a')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="col-2 text-center">
                                          <label class="form-label" for="etika" style="text-align: center">Etika</label>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_b" id="etika_b1" value="1" {{ old('etika_b') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_b" id="etika_b2" value="2" {{ old('etika_b') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_b" id="etika_b3" value="3" {{ old('etika_b') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_b" id="etika_b4" value="4" {{ old('etika_b') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="etika_b" id="etika_b5" value="5" {{ old('etika_b') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('etika_b')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <hr>
                                      <div class="row d-flex align-items-center">
                                        <!-- Column for the first set of radio buttons for A -->
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_a" id="ilmu_a1" value="1" {{ old('ilmu_a') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_a" id="ilmu_a2" value="2" {{ old('ilmu_a') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_a" id="ilmu_a3" value="3" {{ old('ilmu_a') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_a" id="ilmu_a4" value="4" {{ old('ilmu_a') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_a" id="ilmu_a5" value="5" {{ old('ilmu_a') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('ilmu_a')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-2 text-center">
                                          <label class="form-label" for="ilmu" style="text-align: center">Keahlian berdasarkan bidang ilmu</label>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_b" id="ilmu_b1" value="1" {{ old('ilmu_b') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_b" id="ilmu_b2" value="2" {{ old('ilmu_b') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_b" id="ilmu_b3" value="3" {{ old('ilmu_b') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_b" id="ilmu_b4" value="4" {{ old('ilmu_b') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ilmu_b" id="ilmu_b5" value="5" {{ old('ilmu_b') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('ilmu_b')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <hr>
                                      <div class="row d-flex align-items-center">
                                        <!-- Column for the first set of radio buttons for A -->
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_a" id="bing_a1" value="1" {{ old('bing_a') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_a" id="bing_a2" value="2" {{ old('bing_a') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_a" id="bing_a3" value="3" {{ old('bing_a') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_a" id="bing_a4" value="4" {{ old('bing_a') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_a" id="bing_a5" value="5" {{ old('bing_a') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('bing_a')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-2 text-center">
                                          <label class="form-label" for="bing" style="text-align: center">Bahasa Inggris</label>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_b" id="bing_b1" value="1" {{ old('bing_b') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_b" id="bing_b2" value="2" {{ old('bing_b') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_b" id="bing_b3" value="3" {{ old('bing_b') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_b" id="bing_b4" value="4" {{ old('bing_b') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="bing_b" id="bing_b5" value="5" {{ old('bing_b') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('bing_b')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <hr>
                                      <div class="row d-flex align-items-center">
                                        <!-- Column for the first set of radio buttons for A -->
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_a" id="ti_a1" value="1" {{ old('ti_a') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_a" id="ti_a2" value="2" {{ old('ti_a') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_a" id="ti_a3" value="3" {{ old('ti_a') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_a" id="ti_a4" value="4" {{ old('ti_a') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_a" id="ti_a5" value="5" {{ old('ti_a') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('ti_a')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-2">
                                          <label class="form-label text-center" for="ti" style="text-align: center">Penggunaan Teknologi Informasi</label>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_b" id="ti_b1" value="1" {{ old('ti_b') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_b" id="ti_b2" value="2" {{ old('ti_b') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_b" id="ti_b3" value="3" {{ old('ti_b') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_b" id="ti_b4" value="4" {{ old('ti_b') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="ti_b" id="ti_b5" value="5" {{ old('ti_b') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('ti_b')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <hr>
                                      <div class="row d-flex align-items-center">
                                        <!-- Column for the first set of radio buttons for A -->
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_a" id="kom_a1" value="1" {{ old('kom_a') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_a" id="kom_a2" value="2" {{ old('kom_a') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_a" id="kom_a3" value="3" {{ old('kom_a') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_a" id="kom_a4" value="4" {{ old('kom_a') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_a" id="kom_a5" value="5" {{ old('kom_a') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('kom_a')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-2 text-center">
                                          <label class="form-label" for="kom" style="text-align: center">Komunikasi</label>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_b" id="kom_b1" value="1" {{ old('kom_b') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_b" id="kom_b2" value="2" {{ old('kom_b') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_b" id="kom_b3" value="3" {{ old('kom_b') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_b" id="kom_b4" value="4" {{ old('kom_b') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="kom_b" id="kom_b5" value="5" {{ old('kom_b') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('kom_b')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <hr>
                                      <div class="row d-flex align-items-center">
                                        <!-- Column for the first set of radio buttons for A -->
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_a" id="tim_a1" value="1" {{ old('tim_a') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_a" id="tim_a2" value="2" {{ old('tim_a') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_a" id="tim_a3" value="3" {{ old('tim_a') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_a" id="tim_a4" value="4" {{ old('tim_a') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_a" id="tim_a5" value="5" {{ old('tim_a') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('tim_a')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-2 text-center">
                                          <label class="form-label" for="tim" style="text-align: center">Kerja sama tim</label>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_b" id="tim_b1" value="1" {{ old('tim_b') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_b" id="tim_b2" value="2" {{ old('tim_b') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_b" id="tim_b3" value="3" {{ old('tim_b') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_b" id="tim_b4" value="4" {{ old('tim_b') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="tim_b" id="tim_b5" value="5" {{ old('tim_b') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('tim_b')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <hr>
                                      <div class="row d-flex align-items-center">
                                        <!-- Column for the first set of radio buttons for A -->
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_a" id="dev_a1" value="1" {{ old('dev_a') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_a" id="dev_a2" value="2" {{ old('dev_a') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_a" id="dev_a3" value="3" {{ old('dev_a') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_a" id="dev_a4" value="4" {{ old('dev_a') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_a" id="dev_a5" value="5" {{ old('dev_a') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('dev_a')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-2 text-center">
                                          <label class="form-label align-items-center" for="dev" style="text-align: center">Pengembangan</label>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_b" id="dev_b1" value="1" {{ old('dev_b') == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_b" id="dev_b2" value="2" {{ old('dev_b') == '2' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_b" id="dev_b3" value="3" {{ old('dev_b') == '3' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_b" id="dev_b4" value="4" {{ old('dev_b') == '4' ? 'checked' : '' }}>
                                        </div>
                                        <div class="col-1">
                                          <input class="form-check-input" type="radio" name="dev_b" id="dev_b5" value="5" {{ old('dev_b') == '5' ? 'checked' : '' }}>
                                        </div>
                                        @error('dev_b')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <hr>
                                    </div>
                                </div>
                                <div class="mb-3" id="soal4">
                                  <label class="form-label"><strong>12. Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan di program studi anda?</strong></label>
                                  <div class="container">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <!-- Perkuliahan -->
                                        <div class="col-sm-4">
                                            <label class="form-label" for="perkuliahan"><strong>Perkuliahan</strong></label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="perkuliahan" id="perkuliahan_sb" value="sangat besar" {{ old('perkuliahan') == 'sangat besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perkuliahan_sb">Sangat Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="perkuliahan" id="perkuliahan_b" value="besar" {{ old('perkuliahan') == 'besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perkuliahan_b">Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="perkuliahan" id="perkuliahan_cb" value="cukup besar" {{ old('perkuliahan') == 'cukup besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perkuliahan_cb">Cukup Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="perkuliahan" id="perkuliahan_kb" value="kurang besar" {{ old('perkuliahan') == 'kurang besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perkuliahan_kb">Kurang Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="perkuliahan" id="perkuliahan_tsk" value="tidak sama sekali" {{ old('perkuliahan') == 'tidak sama sekali' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="perkuliahan_tsk">Tidak Sama Sekali</label>
                                                </div>
                                            </div>
                                            @error('perkuliahan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Demonstrasi -->
                                        <div class="col-sm-4">
                                            <label class="form-label" for="demonstrasi"><strong>Demonstrasi</strong></label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="demonstrasi" id="demonstrasi_sb" value="sangat besar" {{ old('demonstrasi') == 'sangat besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="demonstrasi_sb">Sangat Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="demonstrasi" id="demonstrasi_b" value="besar" {{ old('demonstrasi') == 'besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="demonstrasi_b">Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="demonstrasi" id="demonstrasi_cb" value="cukup besar" {{ old('demonstrasi') == 'cukup besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="demonstrasi_cb">Cukup Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="demonstrasi" id="demonstrasi_kb" value="kurang besar" {{ old('demonstrasi') == 'kurang besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="demonstrasi_kb">Kurang Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="demonstrasi" id="demonstrasi_tsk" value="tidak sama sekali" {{ old('demonstrasi') == 'tidak sama sekali' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="demonstrasi_tsk">Tidak Sama Sekali</label>
                                                </div>
                                            </div>
                                            @error('demonstrasi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Partisipasi dalam proyek riset -->
                                        <div class="col-sm-4">
                                            <label class="form-label" for="riset"><strong>Partisipasi dalam proyek riset</strong></label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="riset" id="riset_sb" value="sangat besar" {{ old('riset') == 'sangat besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="riset_sb">Sangat Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="riset" id="riset_b" value="besar" {{ old('riset') == 'besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="riset_b">Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="riset" id="riset_cb" value="cukup besar" {{ old('riset') == 'cukup besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="riset_cb">Cukup Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="riset" id="riset_kb" value="kurang besar" {{ old('riset') == 'kurang besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="riset_kb">Kurang Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="riset" id="riset_tsk" value="tidak sama sekali" {{ old('riset') == 'tidak sama sekali' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="riset_tsk">Tidak Sama Sekali</label>
                                                </div>
                                            </div>
                                            @error('riset')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <!-- Magang -->
                                        <div class="col-sm-4">
                                            <label class="form-label" for="magang"><strong>Magang</strong></label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="magang" id="magang_sb" value="sangat besar" {{ old('magang') == 'sangat besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="magang_sb">Sangat Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="magang" id="magang_b" value="besar" {{ old('magang') == 'besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="magang_b">Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="magang" id="magang_cb" value="cukup besar" {{ old('magang') == 'cukup besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="magang_cb">Cukup Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="magang" id="magang_kb" value="kurang besar" {{ old('magang') == 'kurang besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="magang_kb">Kurang Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="magang" id="magang_tsk" value="tidak sama sekali" {{ old('magang') == 'tidak sama sekali' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="magang_tsk">Tidak Sama Sekali</label>
                                                </div>
                                            </div>
                                            @error('magang')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Praktikum -->
                                        <div class="col-sm-4">
                                            <label class="form-label" for="praktikum"><strong>Praktikum</strong></label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="praktikum" id="praktikum_sb" value="sangat besar" {{ old('praktikum') == 'sangat besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="praktikum_sb">Sangat Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="praktikum" id="praktikum_b" value="besar" {{ old('praktikum') == 'besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="praktikum_b">Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="praktikum" id="praktikum_cb" value="cukup besar" {{ old('praktikum') == 'cukup besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="praktikum_cb">Cukup Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="praktikum" id="praktikum_kb" value="kurang besar" {{ old('praktikum') == 'kurang besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="praktikum_kb">Kurang Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="praktikum" id="praktikum_tsk" value="tidak sama sekali" {{ old('praktikum') == 'tidak sama sekali' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="praktikum_tsk">Tidak Sama Sekali</label>
                                                </div>
                                            </div>
                                            @error('praktikum')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kerja Lapangan -->
                                        <div class="col-sm-4">
                                            <label class="form-label" for="kerja_lapangan"><strong>Kerja Lapangan</strong></label>
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="kerja_lapangan" id="kerja_lapangan_sb" value="sangat besar" {{ old('kerja_lapangan') == 'sangat besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="kerja_lapangan_sb">Sangat Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="kerja_lapangan" id="kerja_lapangan_b" value="besar" {{ old('kerja_lapangan') == 'besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="kerja_lapangan_b">Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="kerja_lapangan" id="kerja_lapangan_cb" value="cukup besar" {{ old('kerja_lapangan') == 'cukup besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="kerja_lapangan_cb">Cukup Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="kerja_lapangan" id="kerja_lapangan_kb" value="kurang besar" {{ old('kerja_lapangan') == 'kurang besar' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="kerja_lapangan_kb">Kurang Besar</label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="kerja_lapangan" id="kerja_lapangan_tsk" value="tidak sama sekali" {{ old('kerja_lapangan') == 'tidak sama sekali' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="kerja_lapangan_tsk">Tidak Sama Sekali</label>
                                                </div>
                                            </div>
                                            @error('kerja_lapangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <!-- Diskusi -->
                                        <div class="col-sm-4">
                                            <label class="form-label" for="diskusi"><strong>Diskusi</strong></label>
                                            <div class="d-flex">
                                              <div class="form-check me-3">
                                                  <input class="form-check-input" type="radio" name="diskusi" id="diskusi_sb" value="sangat besar" {{ old('diskusi') == 'sangat besar' ? 'checked' : '' }}>
                                                  <label class="form-check-label" for="diskusi_sb">Sangat Besar</label>
                                                  <br>
                                                  <input class="form-check-input" type="radio" name="diskusi" id="diskusi_b" value="besar" {{ old('diskusi') == 'besar' ? 'checked' : '' }}>
                                                  <label class="form-check-label" for="diskusi_b">Besar</label>
                                                  <br>
                                                  <input class="form-check-input" type="radio" name="diskusi" id="diskusi_cb" value="cukup besar" {{ old('diskusi') == 'cukup besar' ? 'checked' : '' }}>
                                                  <label class="form-check-label" for="diskusi_cb">Cukup Besar</label>
                                                  <br>
                                                  <input class="form-check-input" type="radio" name="diskusi" id="diskusi_kb" value="kurang besar" {{ old('diskusi') == 'kurang besar' ? 'checked' : '' }}>
                                                  <label class="form-check-label" for="diskusi_kb">Kurang Besar</label>
                                                  <br>
                                                  <input class="form-check-input" type="radio" name="diskusi" id="diskusi_tsk" value="tidak sama sekali" {{ old('diskusi') == 'tidak sama sekali' ? 'checked' : '' }}>
                                                  <label class="form-check-label" for="diskusi_tsk">Tidak Sama Sekali</label>
                                              </div>
                                          </div>
                                            @error('magang')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3" id="soal5">
                                  <label class="form-label"><strong>13. Kapan Anda mulai mencari pekerjaan? (Mohon pekerjaan sambilan tidak dimasukkan)</strong></label>
                                  <div class="d-flex">
                                      <div class="form-check me-3">
                                          <input class="form-check-input" type="radio" name="q5" id="q5_4_bulan" value="kira-kira kurang dari 4 bulan" {{ old('q5') == 'kira-kira kurang dari 4 bulan' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="q5_4_bulan">Kira-kira &lt; 4 bulan setelah lulus</label>
                                          <br>
                                          <input class="form-check-input" type="radio" name="q5" id="q5_3_bulan" value="kira-kira lebih dari 3 bulan" {{ old('q5') == 'kira-kira lebih dari 3 bulan' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="q5_3_bulan">Kira-kira &gt; 3 bulan setelah lulus</label>
                                          <br>
                                          <input class="form-check-input" type="radio" name="q5" id="q5_tidak_mencari" value="tidak mencari kerja" {{ old('q5') == 'tidak mencari kerja' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="q5_tidak_mencari">Saya tidak mencari kerja</label>
                                      </div>
                                  </div>
                                  @error('q5')
                                      <div class="text-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3" id="soal6">
                                  <label class="form-label"><strong>14. Bagaimana Anda Mencari Pekerjaan Tersebut ?</strong>&nbsp; Jawaban bisa lebih dari satu:</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="iklan_koran" id="option1">
                                      <label class="form-check-label" for="option1">
                                          Melalui iklan di koran/majalah, brosur
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="lamaran_tanpa_lowongan" id="option2">
                                      <label class="form-check-label" for="option2">
                                          Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="bursa_pameran" id="option3">
                                      <label class="form-check-label" for="option3">
                                          Pergi ke bursa/pameran kerja
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="internet_online" id="option4">
                                      <label class="form-check-label" for="option4">
                                          Mencari lewat internet/iklan online/milis
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="dihubungi_perusahaan" id="option5">
                                      <label class="form-check-label" for="option5">
                                          Dihubungi oleh perusahaan
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="kemenakertrans" id="option6">
                                      <label class="form-check-label" for="option6">
                                          Menghubungi Kemenakertrans
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="agen_kerja" id="option7">
                                      <label class="form-check-label" for="option7">
                                          Menghubungi agen tenaga kerja komersial/swasta
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="pusat_karir" id="option8">
                                      <label class="form-check-label" for="option8">
                                          Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="kantor_kemahasiswaan" id="option9">
                                      <label class="form-check-label" for="option9">
                                          Menghubungi kantor kemahasiswaan/hubungan alumni
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="jejaring" id="option10">
                                      <label class="form-check-label" for="option10">
                                          Membangun jejaring (network) sejak masih kuliah
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="relasi" id="option11">
                                      <label class="form-check-label" for="option11">
                                          Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="bisnis_sendiri" id="option12">
                                      <label class="form-check-label" for="option12">
                                          Membangun bisnis sendiri
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="penempatan_magang" id="option13">
                                      <label class="form-check-label" for="option13">
                                          Melalui penempatan kerja atau magang
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="tempat_sebelumnya" id="option14">
                                      <label class="form-check-label" for="option14">
                                          Bekerja di tempat yang sama dengan tempat kerja semasa kuliah
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="search_method[]" value="lainnya" id="option15" onclick="toggleOtherInput()">
                                      <label class="form-check-label" for="option15">
                                          Lainnya
                                      </label>
                                  </div>
                                  <div id="otherInputContainer" style="display: none;">
                                      <label class="form-label" for="otherInput">Jika Lainnya, mohon jelaskan:</label>
                                      <input class="form-control" type="text" id="otherInput" name="other_search_method">
                                  </div>
                                </div>
                                <div class="mb-3" id="soal7">
                                  <label class="form-label"><strong>15. Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau e-mail) sebelum Anda memperoleh pekerjaan pertama?</strong></label>
                                  <input class="form-control" type="number" name="q7" id="q7" value="{{ old('q7') }}" placeholder="Masukkan jumlah perusahaan/instansi/institusi">
                                  @error('q7')
                                      <div class="text-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3" id="soal8">
                                  <label class="form-label"><strong>16. Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda ?</strong></label>
                                  <input class="form-control" type="number" name="q8" id="q8" value="{{ old('q8') }}" placeholder="Masukkan jumlah perusahaan/instansi/institusi">
                                  @error('q8')
                                      <div class="text-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3" id="soal9">
                                  <label class="form-label"><strong>17. Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara ?</strong></label>
                                  <input class="form-control" type="number" name="q9" id="q9" value="{{ old('q9') }}" placeholder="Masukkan jumlah perusahaan/instansi/institusi">
                                  @error('q9')
                                      <div class="text-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3" id="soal10">
                                  <label class="form-label"><strong>18. Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir ?</strong>&nbsp;Pilihlah satu jawaban</label>
                                  <div class="d-flex">
                                      <div class="form-check me-3">
                                          <input class="form-check-input" type="radio" name="q10" id="qz11" value="tidak" {{ old('q10') == 'tidak' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="qz11">Tidak</label>
                                          <br>
                                          <input class="form-check-input" type="radio" name="q10" id="qz12" value="menunggu hasil lamaran" {{ old('q10') == 'menunggu hasil lamaran' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="qz12">Tidak, tapi saya sedang menunggu hasil lamaran kerja</label>
                                          <br>
                                          <input class="form-check-input" type="radio" name="q10" id="qz13" value="akan bekerja" {{ old('q10') == 'akan bekerja' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="qz13">Ya, saya akan mulai bekerja dalam 2 minggu ke depan</label>
                                          <br>
                                          <input class="form-check-input" type="radio" name="q10" id="qz14" value="belum pasti" {{ old('q10') == 'belum pasti' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="qz14">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</label>
                                          <br>
                                          <input class="form-check-input" type="radio" name="q10" id="qz15" value="lainnya_q10" {{ old('q10') == 'lainnya_q10' ? 'checked' : '' }}>
                                          <label class="form-check-label" for="qz15">Lainnya</label>
                                      </div>
                                  </div>
                                  <!-- Input field for 'Lainnya' -->
                                  <div class="form-check mt-2" id="lainnya_q10" style="display: {{ old('q10') == 'lainnya' ? 'block' : 'none' }}">
                                      <input class="form-control" type="text" name="lainnya_q10" id="lainnya_q10" value="{{ old('lainnya_q10') }}" placeholder="Sebutkan lainnya">
                                  </div>
                                  @error('q10')
                                      <div class="text-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3" id="soal11">
                                  <label class="form-label"><strong>19. Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya?</strong>&nbsp;Jawaban bisa lebih dari satu:</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="pekerjaan_sesuai" id="option1_q11" name="q11[]">
                                      <label class="form-check-label" for="option1_q11">
                                          Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="belum_dapat_pekerjaan" id="option2_q11" name="q11[]">
                                      <label class="form-check-label" for="option2_q11">
                                          Saya belum mendapatkan pekerjaan yang lebih sesuai.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="prospek_karir" id="option3_q11" name="q11[]">
                                      <label class="form-check-label" for="option3_q11">
                                          Di pekerjaan ini saya memeroleh prospek karir yang baik.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="area_kerja_lain" id="option4_q11" name="q11[]">
                                      <label class="form-check-label" for="option4_q11">
                                          Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="promosi_kurang_berhubungan" id="option5_q11" name="q11[]">
                                      <label class="form-check-label" for="option5_q11">
                                          Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="pendapatan_lebih_tinggi" id="option6_q11" name="q11[]">
                                      <label class="form-check-label" for="option6_q11">
                                          Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="pekerjaan_aman" id="option7_q11" name="q11[]">
                                      <label class="form-check-label" for="option7_q11">
                                          Pekerjaan saya saat ini lebih aman/terjamin/secure.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="pekerjaan_menarik" id="option8_q11" name="q11[]">
                                      <label class="form-check-label" for="option8_q11">
                                          Pekerjaan saya saat ini lebih menarik.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="fleksibilitas" id="option9_q11" name="q11[]">
                                      <label class="form-check-label" for="option9_q11">
                                          Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="lokasi_dekat" id="option10_q11" name="q11[]">
                                      <label class="form-check-label" for="option10_q11">
                                          Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="kebutuhan_keluarga" id="option11_q11" name="q11[]">
                                      <label class="form-check-label" for="option11_q11">
                                          Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="harus_terima_pekerjaan" id="option12_q11" name="q11[]">
                                      <label class="form-check-label" for="option12_q11">
                                          Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.
                                      </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q11[]" value="lainnya_q11" id="option13_q11" onclick="toggleOtherInput_q11()">
                                    <label class="form-check-label" for="option13_q11">
                                        Lainnya
                                    </label>
                                  </div>
                                  <div id="otherInputContainer_q11" style="display: none;">
                                    <label class="form-label" for="otherInput_q11">Jika Lainnya, mohon jelaskan:</label>
                                    <input class="form-control" type="text" id="otherInput_q11" name="other_q11">
                                  </div>

                                </div>
                              </div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary" onclick="moveSection(-1)">Sebelumnya</button>
                            <!--<button type="submit" class="btn btn-primary">Kirim</button>-->

                          </div>

                        </form>
                        </div>
                      <!-- End Table with stripped rows -->

                    </div>
                 </div>

              </div>
          </div>

    </div>
</section><!-- End About Section -->

<script>
  let currentSection = 1;
  const sections = document.querySelectorAll('.form-section');

  function showSection(sectionNum) {
    sections.forEach(section => {
      section.classList.remove('current-section');
    });

    sections[sectionNum - 1].classList.add('current-section');
    currentSection = sectionNum;
  }

  function moveSection(step) {
    const newSection = currentSection + step;

    if (newSection >= 1 && newSection <= sections.length) {
      showSection(newSection);
    }
  }

  showSection(currentSection);
</script>

 <!-- Bootstrap JS, Popper.js, and jQuery (optional) -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="{{asset('js/kuis.js')}}" ></script>

<!-- Script Lainnya, Isi sendiri -->
<script>
  function toggleOtherInput() {
      const otherInputContainer = document.getElementById('otherInputContainer');
      const otherCheckbox = document.getElementById('option15');
      if (otherCheckbox.checked) {
          otherInputContainer.style.display = 'block';
      } else {
          otherInputContainer.style.display = 'none';
      }
  }
</script>
<!-- JavaScript to toggle the visibility of the additional input field -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
      var radioButtons = document.querySelectorAll('input[name="q10"]');
      var otherInput = document.getElementById('lainnya_q10');

      radioButtons.forEach(function (radio) {
          radio.addEventListener('change', function () {
              if (this.value === 'lainnya_q10') {
                  otherInput.style.display = 'block';
              } else {
                  otherInput.style.display = 'none';
              }
          });
      });

      // Ensure the input field is correctly displayed based on the initial selection
      var selectedValue = document.querySelector('input[name="q10"]:checked')?.value;
      if (selectedValue === 'lainnya') {
          otherInput.style.display = 'block';
      } else {
          otherInput.style.display = 'none';
      }
  });
</script>
<!-- Script Lainnya, Isi sendiri_q11 -->
<script>
  function toggleOtherInput_q11() {
      const otherInputContainer_q11 = document.getElementById('otherInputContainer_q11');
      const otherCheckbox_q11 = document.getElementById('option13_q11');
      if (otherCheckbox_q11.checked) {
          otherInputContainer_q11.style.display = 'block';
      } else {
          otherInputContainer_q11.style.display = 'none';
      }
  }
</script>

<script>
    function toggleCustomInput() {
        var customInput = document.getElementById('custom-input2');
        var slainnya = document.getElementById('slainnya');

        if (slainnya.checked) {
            customInput.style.display = 'block';
        } else {
            customInput.style.display = 'none';
        }
    }

    // Call the function on page load to ensure the correct state is reflected (e.g., if validation fails)
    document.addEventListener('DOMContentLoaded', function() {
        toggleCustomInput();
    });
</script>
<script>
    function toggleCustomInput_1d() {
        var customInput_1d = document.getElementById('custom-input_1d');
        var lainnya_1d = document.getElementById('lainnya_1d');

        if (lainnya_1d.checked) {
            customInput_1d.style.display = 'block';
        } else {
            customInput_1d.style.display = 'none';
        }
    }

    // Call the function on page load to ensure the correct state is reflected (e.g., if validation fails)
    document.addEventListener('DOMContentLoaded', function() {
        toggleCustomInput_1d();
    });
</script>


<script>
    const kabupatenData = {
        NAD: [
            "Kabupaten Aceh Barat",
            "Kabupaten Aceh Barat Daya",
            "Kabupaten Aceh Besar",
            "Kabupaten Aceh Jaya",
            "Kabupaten Aceh Selatan",
            "Kabupaten Aceh Singkil",
            "Kabupaten Aceh Tamiang",
            "Kabupaten Aceh Tengah",
            "Kabupaten Aceh Tenggara",
            "Kabupaten Aceh Timur",
            "Kabupaten Aceh Utara",
            "Kabupaten Bener Meriah",
            "Kabupaten Bireuen",
            "Kabupaten Gayo Lues",
            "Kabupaten Nagan Raya",
            "Kabupaten Pidie",
            "Kabupaten Pidie Jaya",
            "Kabupaten Simeulue",
            "Kota Banda Aceh",
            "Kota Langsa",
            "Kota Lhokseumawe",
            "Kota Sabang",
            "Kota Subulussalam"
        ],
        SUMUT: [
            "Kabupaten Asahan",
            "Kabupaten Batubara",
            "Kabupaten Dairi",
            "Kabupaten Deli Serdang",
            "Kabupaten Humbang Hasundutan",
            "Kabupaten Karo",
            "Kabupaten Labuhanbatu",
            "Kabupaten Labuhanbatu Selatan",
            "Kabupaten Labuhanbatu Utara",
            "Kabupaten Langkat",
            "Kabupaten Mandailing Natal",
            "Kabupaten Nias",
            "Kabupaten Nias Barat",
            "Kabupaten Nias Selatan",
            "Kabupaten Nias Utara",
            "Kabupaten Padang Lawas",
            "Kabupaten Padang Lawas Utara",
            "Kabupaten Pakpak Bharat",
            "Kabupaten Samosir",
            "Kabupaten Serdang Bedagai",
            "Kabupaten Simalungun",
            "Kabupaten Tapanuli Selatan",
            "Kabupaten Tapanuli Tengah",
            "Kabupaten Tapanuli Utara",
            "Kabupaten Toba Samosir",
            "Kota Binjai",
            "Kota Gunungsitoli",
            "Kota Medan",
            "Kota Padangsidempuan",
            "Kota Pematangsiantar",
            "Kota Sibolga",
            "Kota Tanjungbalai",
            "Kota Tebing Tinggi"
        ],
        SUMBAR: [
            'Padang',
            'Bukittinggi',
            'Payakumbuh',
            'Solok',
            'Sijunjung',
            'Tanah Datar',
            'Agam',
            'Pesisir Selatan',
            'Dharmasraya',
            'Pasaman',
            'Pasaman Barat',
            'Kepulauan Mentawai',
            'Solok Selatan',
        ],
        SUMSEL: [
            'Palembang',
            'Lubuklinggau',
            'Pagar Alam',
            'Banyuasin',
            'Muara Enim',
            'Ogan Komering Ilir',
            'Ogan Komering Ulu',
            'Lahat',
            'Musi Banyuasin',
            'Musi Rawas',
            'Empat Lawang',
            'Penukal Abab Lematang Ilir',
            'OKU Timur',
            'OKU Selatan',
        ],
        Riau: [
            'Pekanbaru',
            'Dumai',
            'Siak',
            'Kampar',
            'Kuantan Singingi',
            'Indragiri Hulu',
            'Indragiri Hilir',
            'Rokan Hulu',
            'Rokan Hilir',
            'Pelalawan',
            'Bengkalis',
            'Meranti',
        ],
        KEPRI: [
            'Tanjung Pinang',
            'Batam',
            'Bintan',
            'Karimun',
            'Natuna',
            'Lingga',
            'Anambas',
        ],
        Jambi: [
            'Jambi',
            'Sungai Penuh',
            'Muaro Jambi',
            'Batanghari',
            'Tanjung Jabung Barat',
            'Tanjung Jabung Timur',
            'Bungo',
            'Kerinci',
            'Sarolangun',
            'Merangin',
            'Sungai Penuh',
        ],
        Bengkulu: [
            'Bengkulu',
            'Bengkulu Utara',
            'Bengkulu Selatan',
            'Kepahiang',
            'Rejang Lebong',
            'Lebong',
            'Mukomuko',
            'Seluma',
            'Curup',
        ],
        BABEL: [
            'Pangkal Pinang',
            'Bangka',
            'Belitung',
            'Bangka Barat',
            'Bangka Tengah',
            'Bangka Selatan',
            'Belitung Timur',
            'Belitung Selatan',
        ],
        Lampung: [
            'Bandar Lampung',
            'Lampung Selatan',
            'Lampung Utara',
            'Tanggamus',
            'Way Kanan',
            'Pesawaran',
            'Pringsewu',
            'Metro',
            'Lampung Tengah',
            'Lampung Timur',
            'Mesuji',
            'Tulang Bawang',
            'Tulang Bawang Barat',
            'Pesisir Barat',
        ],
        Banten: [
            'Tangerang',
            'Tangerang Selatan',
            'Serang',
            'Cilegon',
            'Lebak',
            'Pandeglang',
        ],
        JABAR: [
            'Bandung',
            'Bandung Barat',
            'Bekasi',
            'Bogor',
            'Ciamis',
            'Cianjur',
            'Garut',
            'Indramayu',
            'Karawang',
            'Kuningan',
            'Majalengka',
            'Pangandaran',
            'Purwakarta',
            'Subang',
            'Sukabumi',
            'Sumedang',
            'Tasikmalaya',
        ],
        JATENG: [
            'Banyumas',
            'Batang',
            'Blora',
            'Boyolali',
            'Brebes',
            'Cilacap',
            'Demak',
            'Grobogan',
            'Jepara',
            'Karanganyar',
            'Kebumen',
            'Klaten',
            'Pati',
            'Pekalongan',
            'Pemalang',
            'Rembang',
            'Semarang',
            'Sragen',
            'Sukoharjo',
            'Tegal',
            'Wonogiri',
            'Wonosobo',
        ],
        JATIM: [
            'Bangkalan',
            'Banyuwangi',
            'Blitar',
            'Bojonegoro',
            'Bondowoso',
            'Gresik',
            'Jember',
            'Jombang',
            'Kediri',
            'Lamongan',
            'Madiun',
            'Magetan',
            'Malang',
            'Mojokerto',
            'Nganjuk',
            'Ngawi',
            'Pacitan',
            'Pamekasan',
            'Pasuruan',
            'Probolinggo',
            'Sampang',
            'Sidoarjo',
            'Situbondo',
            'Trenggalek',
            'Tuban',
            'Tulungagung',
        ],
        Jakarta: [
            'Jakarta Pusat',
            'Jakarta Utara',
            'Jakarta Selatan',
            'Jakarta Barat',
            'Jakarta Timur',
        ],
        DIY: [
            'Bantul',
            'Gunung Kidul',
            'Kulon Progo',
            'Sleman',
            'Yogyakarta',
        ],
        Bali: [
            'Badung',
            'Bangli',
            'Buleleng',
            'Gianyar',
            'Jembrana',
            'Karangasem',
            'Klungkung',
            'Tabanan',
        ],
        NTB: [
            'Bima',
            'Dompu',
            'Lombok Barat',
            'Lombok Tengah',
            'Lombok Timur',
            'Sumbawa',
            'Sumbawa Barat',
        ],
        NTT: [
            'Alor',
            'Belu',
            'Ende',
            'Flores Timur',
            'Kupang',
            'Lembata',
            'Malaka',
            'Ngada',
            'Nagekeo',
            'Rote Ndao',
            'Sikka',
            'Sumba Barat',
            'Sumba Timur',
            'Timor Tengah Selatan',
            'Timor Tengah Utara',
        ],
        KALBAR: [
            'Bengkayang',
            'Kapuas Hulu',
            'Kubu Raya',
            'Landak',
            'Melawi',
            'Pontianak',
            'Sanggau',
            'Sekadau',
            'Singkawang',
            'Sintang',
        ],
        KALSEL: [
            'Banjar',
            'Barito Kuala',
            'Hulu Sungai Selatan',
            'Hulu Sungai Tengah',
            'Hulu Sungai Utara',
            'Kotabaru',
            'Tanah Bumbu',
            'Tanah Laut',
            'Banjarmasin',
            'Balangan',
        ],
        KALTENG: [
            'Barito Selatan',
            'Barito Utara',
            'Gunung Mas',
            'Kapuas',
            'Katingan',
            'Kotawaringin Barat',
            'Kotawaringin Timur',
            'Murung Raya',
            'Palangka Raya',
            'Pulau Pisang',
            'Seruyan',
        ],
        KALTIM: [
            'Balikpapan',
            'Bontang',
            'East Kutai',
            'Kutai Kartanegara',
            'Kutai Timur',
            'Mahakam Ulu',
            'Paser',
            'Penajam Paser Utara',
            'Samarinda',
        ],
        KALTARA: [
            'Bulungan',
            'Malinau',
            'Nunukan',
            'Tana Tidung',
            'Tarakan',
        ],
        Gorontalo: [
            'Bone Bolango',
            'Gorontalo',
            'Gorontalo Utara',
            'Pohuwato',
            'Selatan',
            'Bohusami',
        ],
        SULSEL: [
            'Barru',
            'Bone',
            'Bulukumba',
            'Enrekang',
            'Gowa',
            'Luwu',
            'Luwu Timur',
            'Luwu Utara',
            'Makassar',
            'Maros',
            'Pangkep',
            'Pinrang',
            'Selayar',
            'Sinjai',
            'Soppeng',
            'Takalar',
            'Tana Toraja',
            'Toraja Utara',
        ],
        SULTRA: [
            'Buton',
            'Buton Selatan',
            'Buton Utara',
            'Kolaka',
            'Kolaka Timur',
            'Muna',
            'Muna Barat',
            'Kendari',
            'Wakatobi',
        ],
        SULTENG: [
            'Banggai',
            'Banggai Kepulauan',
            'Donggala',
            'Morowali',
            'Morowali Utara',
            'Palu',
            'Poso',
            'Sigi',
            'Tojo Una-Una',
            'Toli-Toli',
        ],
        SULUT: [
            'Bolaang Mongondow',
            'Bolaang Mongondow Selatan',
            'Bolaang Mongondow Timur',
            'Bolaang Mongondow Utara',
            'Kepulauan Sangihe',
            'Kepulauan Talaud',
            'Minahasa',
            'Minahasa Selatan',
            'Minahasa Utara',
            'Tomohon',
        ],
        SULBAR: [
            'Mamuju',
            'Mamuju Tengah',
            'Polewali Mandar',
            'Majene',
            'Mamasa',
        ],
        MALUKU: [
            'Buru',
            'Buru Selatan',
            'Maluku Tengah',
            'Maluku Tenggara',
            'Seram Bagian Barat',
            'Seram Bagian Timur',
            'Ambon',
        ],
        MALUT: [
            'Halmahera Barat',
            'Halmahera Selatan',
            'Halmahera Tengah',
            'Halmahera Utara',
            'Kepulauan Sula',
            'Tidore Kepulauan',
            'Ternate',
        ],
        PAPUA: [
            'Jayapura',
            'Jayapura Kota',
            'Sarmi',
            'Keerom',
            'Mamberamo Raya',
            'Puncak Jaya',
            'Nabire',
            'Paniai',
            'Yahukimo',
            'Waropen',
            'Mimika',
            'Boven Digoel',
        ],
        PAPUA_BARAT: [
            'Bintuni',
            'Manokwari',
            'Sorong',
            'Sorong Selatan',
            'Raja Ampat',
            'Tambrauw',
            'Teluk Bintuni',
            'Kaimana',
        ],

        // Tambahkan kabupaten/kota untuk provinsi lain di sini
    };

    function updateKabupaten() {
        const provinsiSelect = document.getElementById("provinsi");
        const kabupatenSelect = document.getElementById("kabupaten");
        const selectedProvinsi = provinsiSelect.value;

        // Clear existing options
        kabupatenSelect.innerHTML = '<option value="">-- Pilih Kabupaten/Kota --</option>';

        if (selectedProvinsi && kabupatenData[selectedProvinsi]) {
            kabupatenData[selectedProvinsi].forEach(kabupaten => {
                const option = document.createElement("option");
                option.value = kabupaten;
                option.textContent = kabupaten;
                kabupatenSelect.appendChild(option);
            });
        }
    }
    </script>

@endsection
