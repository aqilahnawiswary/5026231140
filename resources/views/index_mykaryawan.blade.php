@extends('templateBootstrap')

@section('content')
    <h3>Data Karyawan</h3>

    <table class="table table-stripe">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>
        @foreach ($mykaryawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td class="text-sentencecase">{{ $k->namalengkap }}</td>
                <td>{{ $k->divisi }}</td>
                <td class="text-lowercase">{{ $k->departemen }}</td>
                <td>
                    <a href="{{ url('/eas/view/' . $k->kodepegawai) }}" class="btn btn-info">View</a>
                    <a href="{{ url('/eas/edit/' . $k->kodepegawai) }}" class="btn btn-info">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $mykaryawan->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus-->
@endsection
