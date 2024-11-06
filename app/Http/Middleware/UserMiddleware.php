<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
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
        if(auth()->check())
        {
            $user=request()->user();
            if($user->role == "USER")
            {
                return $next($request);
            }
            elseif($user->role == "ADMIN")
            {
                return redirect('/admin')->with('status','Anda bukan user, anda adalah seorang admin');
            }
        }
        return redirect('/login')->with('status','Anda belum melakukan authentikasi');
    }
}
