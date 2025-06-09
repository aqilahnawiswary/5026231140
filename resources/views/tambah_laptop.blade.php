@extends('templateBootstrap')
@section('content')

    <h3>Tambah Laptop Baru</h3>
    <a href="/laptop" class="btn btn-secondary">Kembali</a>

    <br />
    <br />
    <form action="/laptop/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Merk Laptop </label>
            </div>
            <div class="col-6">
                <input type="text" name="merklaptop" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Harga (Rp) </label>
            </div>
            <div class="col-6">
                <input type="int" name="hargalaptop" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Tersedia </label>
            </div>
            <div class="col-6">
                <select name="tersedia" class="form-control" required="required">
                    <option value="1">Iya</option>
                    <option value="0">Tidak</option>
                </select> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Berat </label>
            </div>
            <div class="col-6">
                <input type="text" name="berat" required="required" class="form-control"> <br />
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
