<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsuarioMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user->role != 3) {
            $user = Auth::user();
            if ($user->role == 1) {
                return redirect("/desarrollador");
            }
            if ($user->role == 2) {
                return redirect("/administrador");
            }
            if ($user->role == 3) {
                return redirect("/usuario");
            }
            return redirect("/login");
        }
        return $next($request);
    }
}
