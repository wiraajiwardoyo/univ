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



}
