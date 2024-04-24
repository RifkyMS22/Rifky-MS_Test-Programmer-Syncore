@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1 class="my-4">Data Biodata Karyawan</h1>
        </div>
        <div class="row mb-4">
            <div class="col">
                <a href="{{ route('biodata.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @foreach($biodatas as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->kontak }}</td>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
