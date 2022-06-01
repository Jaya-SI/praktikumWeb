<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('layouts.home', [
            "title" => "Home",
        ]);
    }
    public function index()
    {
        $no = 1;
        $data_lokasi = Lokasi::all();
        return view('layouts.lokasi',[
            "title" => "Lokasi",
            'data_lokasi' => $data_lokasi,
            "no" => $no,
        ]);
    }
}
