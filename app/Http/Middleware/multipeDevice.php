<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class multipeDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->email && $user->akses_token == csrf_token()) {
                return $next($request);
            } else {
                session()->flush();
                Auth::logout();
                return redirect('auth/login')->with('info', 'ada user login menggunakan akun anda, silahkan login kembali');
            }
        } else {
            return redirect('auth/login')->with('error', 'Please login to continue.');
        }
    }
}
