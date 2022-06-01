<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Whoops\Run;

class LokasiController extends Controller
{
    public function index()
    {
        return view('layouts.clokasi', [
            "title" => "Tambah Lokasi",
        ]);
    }

    public function create(Request $request)
    {
        Lokasi::create($request->all());
        return redirect('/lokasi');
    }

    public function ubah($id)
    {   
        $lokasi = Lokasi::find($id);
        return view('lokasi.ubah',[
            "title" => "Ubah Lokasi",
            'lokasi' => $lokasi,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $lokasi = Lokasi::find($id);
        $lokasi->update($request->all());
        return redirect('/lokasi');
    }

    public function delete($id)
    {
        $lokasi = Lokasi::find($id);
        $lokasi->delete();
        return redirect('/lokasi');
    }

    public function print()
    {
        $no = 1;
        $data_lokasi = Lokasi::all();
        return view('lokasi.print',[
            "title" => "Lokasi",
            'data_lokasi' => $data_lokasi,
            "no" => $no,
        ]);
    }
}
