<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa= mahasiswa::with(['user'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return  view('makul.create');
    }

    public function store(Request $request)
    {
        makul::create($request->all());
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = makul::find($id);
        $makul->update($request->all());

        return redirect()->route('makul');
    }

    public function destroy($id)
    {
        $makul = makul::find($id);
        $makul->delete();

        return redirect()->route('makul');
    }



}
