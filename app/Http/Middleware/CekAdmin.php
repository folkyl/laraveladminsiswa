<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (session('admin_role') !== 'admin') {
            return redirect()->route('home')->with('error', 'Akses ditolak. Hanya admin yang boleh.');
        }

        return $next($request);
    }
}

