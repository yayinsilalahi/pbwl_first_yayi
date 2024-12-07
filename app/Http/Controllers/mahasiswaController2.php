<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    //indec
    function index()
    {
        return view('mahasiswa');
    }
}
