<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class siswaController extends Controller
{
    //
    public function home()
    { 
        if (!session()->has('admin_id')) {
            return redirect()->route('login');
    }

    $siswa = Siswa::all();
        return view('home', compact('siswa'));
    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        siswa::create($request->only('nama', 'bb', 'tb'));
        return redirect()->route('home');
    }
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->update($request->only('nama', 'bb', 'tb'));
        return redirect()->route('home');
    }
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('home');
    }
        public function index()
    {
        $guru = guru::all();
        return view('guru.index', compact('guru'));
    }
}
