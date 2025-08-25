<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index()
    {
        $guru = guru::all();
        return view('guru.index', compact('guru'));
    }
}
