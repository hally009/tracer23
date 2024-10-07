@extends('konfigurasi')

@section('content')

<!-- ======= About Section ======= -->
<section id="aktor" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>AKUN</h2>
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
                            <h5 class="card-title" style="display: inline-block;">Daftar Akun Pengguna</h5>
                            <button type="button" class="btn btn-outline-primary float-sm-end" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Pengguna</button>
                        </div>

                        <hr>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>
                                            <i class="bx bxs-edit bx-sm" style="color:cornflowerblue;"></i>
                                            <i class="bx bxs-eraser bx-sm" style="color:cornflowerblue;"></i>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada data...</td>
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
                <h5 class="modal-title">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('daftar') }}" method="POST">
                <!-- Modal body -->
                <div class="modal-body">

                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Nama</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="status" class="col-md-4 col-form-label text-md-end">Status Pengguna</label>
                        <div class="col-md-6">
                            <select id="status" class="form-select @error('status') is-invalid @enderror" name="status" required>
                                <option value="" disabled {{ old('status') ? '' : 'selected' }}>Pilih Status</option>
                                <option value="Responden" {{ old('status') == 'Responden' ? 'selected' : '' }}>Responden</option>
                                <option value="Prodi" {{ old('status') == 'Prodi' ? 'selected' : '' }}>Prodi</option>
                                <option value="Puskar" {{ old('status') == 'Puskar' ? 'selected' : '' }}>Puskar</option>
                            </select>

                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Konfirmasi Password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary" id="submitButton">Tambah</button>
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
