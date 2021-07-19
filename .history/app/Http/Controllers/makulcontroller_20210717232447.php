<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makulcontroller extends Controller
{
    public function index()
    {
        return view('makul.index');
    }

    public function create()
    {
        return " halo saya makul controler";
    }
}
