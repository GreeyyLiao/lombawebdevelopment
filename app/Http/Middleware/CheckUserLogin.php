<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Jika belum login, arahkan ke halaman 404 atau login
            return redirect()->route('/login')->withErrors(['message' => 'Anda harus login terlebih dahulu.']);
            // Atau jika ingin menampilkan halaman 404, gunakan kode ini
            // abort(404);
        }

        // Jika sudah login, lanjutkan ke halaman yang diminta
        return $next($request);
    }
}
