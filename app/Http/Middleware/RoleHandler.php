<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $allowedTables = ['admin', 'mahasiswa', 'dosen'];

        if(!session()->has('table') || !in_array(session('table'), $allowedTables)){
            return redirect('/');
        }

        $table = session('table');
        session(['role' => $table]);

        return $next($request);
    }
}
