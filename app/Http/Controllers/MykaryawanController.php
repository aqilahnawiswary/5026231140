<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MykaryawanController extends Controller
{
    // Tampilkan semua data mahasiswa
    public function index() {
        $mykaryawan = DB::table('mykaryawan')->paginate(10);
        return view('index_mykaryawan', ['mykaryawan' => $mykaryawan]);
    }

    // Tampilkan detail 1 mahasiswa
    public function view($kodepegawai) {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('view_mykaryawan', ['mykaryawan' => $mykaryawan]);
    }

    // Tampilkan form edit
    public function edit($kodepegawai) {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('edit_mykaryawan', ['mykaryawan' => $mykaryawan]);
    }

    public function store(Request $request)
    {
        DB::table('mykaryawan')->insert([
           'Nama Lengkap' => strtoupper($request->namalengkap),
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        return redirect('/eas');
    }

    // Update data mahasiswa
    public function update(Request $request) {
        DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->update([
            'Nama Lengkap' => strtoupper($request->namalengkap),
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('/eas');
    }

}
