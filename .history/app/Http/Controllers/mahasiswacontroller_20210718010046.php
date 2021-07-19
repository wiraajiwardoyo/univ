<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::with(['user'])->get(); //select * from nama_table
        return view('mahasiswa.index',compact('mahasiswa'));
    }

    public function create()
    {
         $user = user::all();
         return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request)
    {
        mahasiswa::create($request->all());

        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
        $user = user::all();
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa','user'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa');
    }
}
