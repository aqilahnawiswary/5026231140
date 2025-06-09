@extends('templateBootstrap')
@section('content')

<h3>Edit Laptop</h3>
<a href="/laptop" class="btn btn-secondary">Kembali</a>

<br>
<br>
<form action="/laptop/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $laptop->ID }}">

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Merk Laptop</label>
        </div>
        <div class="col-6">
            <input type="text" required name="merklaptop" value="{{ $laptop->merklaptop }}" class="form-control"> <br />
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Harga Laptop (RP)</label>
        </div>
        <div class="col-6">
            <input type="number" required name="hargalaptop" value="{{ $laptop->hargalaptop }}" class="form-control"> <br />
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Tersedia</label>
        </div>
        <div class="col-6">
            <select name="tersedia" class="form-control">
                <option value="1" @if($laptop->tersedia == 1) selected @endif>Iya</option>
                <option value="0" @if($laptop->tersedia == 0) selected @endif>Tidak</option>
            </select> <br />
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Berat</label>
        </div>
        <div class="col-6">
            <input type="text" required name="berat" value="{{$laptop->berat}}" class="form-control"> <br />
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
