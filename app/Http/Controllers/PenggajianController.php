<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    public function index()
    {
        return view('penggajian.cpenggajian',[
            "title" => "Tambah Data Penggajian",
        ]);
    }

    public function create(Request $request)
    {
        Penggajian::create($request->all());
        return redirect('/penggajian');
    }

    public function print()
    {
        $no = 1;
        $data_penggajian = Penggajian::all();
        return view('penggajian.print',[
            "title" => "Data Penggajian",
            'data_penggajian' => $data_penggajian,
            'no' => $no,
        ]);
    }
}
