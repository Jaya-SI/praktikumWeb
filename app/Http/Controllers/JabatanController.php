<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        return view('jabatan.cjabatan',[
            "title" => "Tambah Jabatan",
        ]);
    }

    public function create(Request $request)
    {
        Jabatan::create($request->all());
        return redirect('/jabatan');
    }

    public function delete($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect('/jabatan');
    }

    public function ubah($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.ubah',[
            "title" => "Ubah Data Jabatan",
            'jabatan' => $jabatan,
        ]);
    }
    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->update($request->all());
        return redirect('/jabatan');
    }
}
