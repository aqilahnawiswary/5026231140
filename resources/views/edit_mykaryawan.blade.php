@extends('templateBootstrap')

@section('content')
<div class="container mt-4">
    <h3>Edit Data Karyawan</h3>

    <form action="/eas/{{ $mykaryawan->kodepegawai }}/update" method="POST">
        @csrf
        <input type="hidden" name="kodepegawai" value="{{ $mykaryawan->kodepegawai }}">

        <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" id="namalengkap" name="namalengkap" class="form-control" value="{{ $mykaryawan->namalengkap }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Jurusan" class="col-sm-2 col-form-label">Divisi </label>
            <div class="col-sm-6">
                <input type="text" id="divisi" name="divisi" class="form-control" value="{{ $mykaryawan->divisi }}" required maxlength="15">
            </div>
        </div>

        <div class="row mb-3">
            <label for="IPK" class="col-sm-2 col-form-label">Departemen </label>
            <div class="col-sm-6">
                <input type="text" id="departemen" name="departemen" class="form-control" value="{{ $mykaryawan->departemen }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 offset-sm-2">
                <a href="/eas" button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="/eas" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
