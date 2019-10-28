<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {   
        if(Auth::check() && Auth::user()->isAdmin()){
            // is Admin function is at user Model:
            return $next($request);
        }
        return redirect('home');
    }
}
