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
}
