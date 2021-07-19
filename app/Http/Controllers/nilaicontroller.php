<?php

namespace App\Http\Controllers;

use App\nilai;
use App\mahasiswa;
use App\makul;
use Illuminate\Http\Request;

class nilaicontroller extends Controller
{
    public function index()
    {
        $nilai = nilai::with(['mahasiswa','makul'])->get(); //select * from nama_table
        return view('nilai.index',compact('nilai'));
    }

    public function create()
    {
         $mahasiswa = mahasiswa::all();
         $makul = makul::all();
         return view('nilai.create', compact('mahasiswa','makul'));
    }

    public function store(Request $request)
    {
        nilai::create($request->all());

        return redirect()->route('nilai');
    }

    public function edit($id)
    {
         $mahasiswa = mahasiswa::all();
         $makul = makul::all();
        $nilai = nilai::find($id);
        return view('nilai.edit', compact('nilai','mahasiswa','makul'));
    }

    public function update(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->update($request->all());

        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();

        return redirect()->route('nilai');
    }
}
