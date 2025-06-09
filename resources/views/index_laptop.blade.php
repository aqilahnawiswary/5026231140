@extends('templateBootstrap')
@section('content')

    <h3>Data Laptop</h3>
    <a href="/laptop/tambah" class="btn btn-primary mb-3">+ Tambah Laptop Baru</a>

    <form action="/laptop/cari" method="GET" class="form-inline mb-3">
        <label class="form-label me-2">Cari Data Laptop :</label>
        <input type="text" name="cari" placeholder="Ketik Merk Laptop" class="form-control me-2">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Harga (Rp)</th>
                <th>Tersedia</th>
                <th>Berat (kg)</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptop as $l)
                <tr>
                    <td>{{$l->ID}}</td> <!--nama kolomnya di databaseku-->
                    <td>{{$l->merklaptop}}</td>
                    <td>{{number_format($l->hargalaptop, 0, ',', '.')}}</td>
                    <td>{{$l->tersedia == 1 ? 'Iya' : 'Tidak'}}</td>
                    <td>{{$l->berat}}</td>
                    <td>
                        <a href="/laptop/edit/{{$l->ID}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/laptop/hapus/{{$l->ID}}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $laptop->links() }}
@endsection
