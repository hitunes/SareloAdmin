<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $role_name = User::join('roles', 'users.role_id', 'roles.id')
        //             ->where('roles.name', 'User')->get();
        if (Auth::user() && Auth::user()->role_id === 4) {
            return $next($request);
        }
        return redirect('/admin');
    }
}
