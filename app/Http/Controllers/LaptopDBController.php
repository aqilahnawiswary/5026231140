<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopDBController extends Controller
{
    public function index()
    {
        $laptop = DB::table('laptop')->paginate(10); //10 data per halaman

        return view('index_laptop',['laptop' => $laptop]); //send data laptop ke view, index (index_laptop)
    }

    public function tambah(){
        return view('tambah_laptop');
    }

    public function store(Request $request)
    {
        DB::table('laptop')->insert([
            'merklaptop' => $request->merklaptop,
            'hargalaptop' => $request->hargalaptop,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/laptop');
    }

    public function edit($id)
    {
        $laptop = DB::table('laptop')->where('ID',$id)->first();
        return view('edit_laptop',['laptop' => $laptop]);
    }

    public function update(Request $request)
{
    DB::table('laptop')->where('ID',$request->id)->update([
        'merklaptop' => $request->merklaptop,
        'hargalaptop' => $request->hargalaptop,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat
    ]);
    return redirect('/laptop');
}

    public function hapus($id)
    {
        DB::table('laptop')->where('ID',$id)->delete();
        return redirect('/laptop');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $laptop = DB::table('laptop')
        ->where('merklaptop','like',"%".$cari."%")
        ->paginate();

        return view('index_laptop',['laptop' => $laptop]);
    }
}
