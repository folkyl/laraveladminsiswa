<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; // pastikan model Artikel ada

class ArtikelController extends Controller
{
    public function landing()
    {
        // Ambil semua data artikel
        $artikel = Artikel::all();

        // Kirim ke view
        return view('landing', compact('artikel'));
    }

    public function detil($id)
    {
        $dataartikel = Artikel::findOrFail($id);
        return view('detil', compact('dataartikel'));
    }
}
