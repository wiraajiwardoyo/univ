<?php

namespace App\Http\Controllers;

use App\makul;
use Illuminate\Http\Request;

class makulcontroller extends Controller
{
    public function index()
    {
        $makul = makul::all();
        return view('makul.index', compact('makul'));
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
}
