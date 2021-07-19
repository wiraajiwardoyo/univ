<?php

namespace App\Http\Controllers;

use App\makul;
use Illuminate\Http\Request;

class makulcontroller extends Controller
{
    public function index()
    {
        $makul = makul
        return view('makul.index');
    }

    public function create()
    {
        return " halo saya makul controler";
    }
}
