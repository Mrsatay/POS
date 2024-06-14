<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        // Cek sudah login atau belum, jika belum kembali ke halaman login
        if (!Auth::check()) {
            return redirect('login');
        }

        // Simpan data user pada variabel $user
        $user = Auth::user();

        // Jika user memiliki level sesuai dengan yang diperlukan, lanjutkan request
        if ($user->level_id == $roles) {
            return $next($request);
        }

        // Jika tidak memiliki akses, kembalikan ke halaman login dengan pesan error
        return redirect('login')->with('error', 'Maaf, Anda tidak memiliki akses');
    }
}
