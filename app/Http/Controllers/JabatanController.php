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
}
