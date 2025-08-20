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
        $artikel = artikel::all(); 
        return view('landing', compact('artikel'));
    }
    public function formLogin()
    {
        return view('login');
    }
    public function prosesLogin(Request $request)
    {
        $admin = admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
          

            session([
            'admin_id' => $admin->id,
            'admin_username' => $admin->username,
            'admin_role' => $admin->role, 
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
    public function prosesRegister(Request $request)
{
try {
$request->validate([
'username' => 'required|string|max:50|unique:dataadmin,username',
'password' => 'required|string|min:8',
'role' => 'required|string|in:admin,guru,siswa',
]);
admin::create([
'username' => $request->username,
'password' => Hash::make($request->password),
'role' => $request->role,
]);
return redirect()->back()->with('error', 'Registrasi berhasil!');
} catch (Exception $e) {
return redirect()->back()->with('error', 'Registrasi gagal: ' . $e->getMessage());
}
}
public function formregister()
{
    return view('register'); // Pastikan file resources/views/register.blade.php ada
}
}
