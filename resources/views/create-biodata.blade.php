@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Biodata dan Riwayat Pendidikan Terakhir') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('biodata.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">{{ __('Nama') }}</label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">{{ __('Alamat') }}</label>
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required>
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kontak" class="form-label">{{ __('Kontak') }}</label>
                            <input id="kontak" type="text" class="form-control @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak') }}" required>
                            @error('kontak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <hr>

                        <h3>Riwayat Pendidikan Terakhir</h3>
                        <div class="mb-3">
                            <label for="jenjang_pendidikan" class="form-label">{{ __('Jenjang Pendidikan') }}</label>
                            <input id="jenjang_pendidikan" type="text" class="form-control @error('jenjang_pendidikan') is-invalid @enderror" name="jenjang_pendidikan" value="{{ old('jenjang_pendidikan') }}" required>
                            @error('jenjang_pendidikan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_sekolah" class="form-label">{{ __('Nama Sekolah') }}</label>
                            <input id="nama_sekolah" type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" name="nama_sekolah" value="{{ old('nama_sekolah') }}" required>
                            @error('nama_sekolah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">{{ __('Jurusan') }}</label>
                            <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" required>
                            @error('jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tahun_lulus" class="form-label">{{ __('Tahun Lulus') }}</label>
                            <input id="tahun_lulus" type="number" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus') }}" required>
                            @error('tahun_lulus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <hr>

                        <h3>Riwayat Pelatihan</h3>
                        <div class="mb-3">
                            <label for="nama_pelatihan" class="form-label">{{ __('Nama Pelatihan') }}</label>
                            <input id="nama_pelatihan" type="text" class="form-control @error('nama_pelatihan') is-invalid @enderror" name="nama_pelatihan" value="{{ old('nama_pelatihan') }}" required>
                            @error('nama_pelatihan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="institusi" class="form-label">{{ __('Institusi') }}</label>
                            <input id="institusi" type="text" class="form-control @error('institusi') is-invalid @enderror" name="institusi" value="{{ old('institusi') }}" required>
                            @error('institusi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_mulai" class="form-label">{{ __('Tanggal Mulai') }}</label>
                            <input id="tanggal_mulai" type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required>
                            @error('tanggal_mulai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">{{ __('Tanggal Selesai') }}</label>
                            <input id="tanggal_selesai" type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" value="{{ old('tanggal_selesai') }}" required>
                            @error('tanggal_selesai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <hr>

                        <h3>Riwayat Pekerjaan</h3>
                        <div class="mb-3">
                            <label for="perusahaan" class="form-label">{{ __('Nama Perusahaan') }}</label>
                            <input id="perusahaan" type="text" class="form-control @error('perusahaan') is-invalid @enderror" name="perusahaan" value="{{ old('perusahaan') }}" required>
                            @error('perusahaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="posisi" class="form-label">{{ __('Posisi') }}</label>
                            <input id="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi') }}" required>
                            @error('posisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_mulai" class="form-label">{{ __('Tanggal Mulai') }}</label>
                            <input id="tanggal_mulai" type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required>
                            @error('tanggal_mulai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">{{ __('Tanggal Selesai') }}</label>
                            <input id="tanggal_selesai" type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" value="{{ old('tanggal_selesai') }}" required>
                            @error('tanggal_selesai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
