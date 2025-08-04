<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function landing()
    {
        return view('landing');
    }
    public function formLogin()
    {
        return view('login');
    }
    public function prosesLogin(Request $request)
    {
        $admin = admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // simpan ke session 

            session([
            'admin_id' => $admin->id,
            'admin_username' => $admin->username,
            'admin_role' => $admin->role, // ⬅️ tambahkan ini
        ]);
            return redirect()->route('home');
        } 
        return back()->with('error', 'Username atau password salah');
    }
    public function logout()
    {
        session()->forget(['admin_id', 'admin_username']);
        return redirect()->route('landing');
    }
}
