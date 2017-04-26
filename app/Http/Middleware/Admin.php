<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

use App\Models\Role;

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
        $role = Role::where('name', 'Super Admin')->first();

        if (Auth::user() && Auth::user()->role_id === $role->id) {
            return $next($request);
        }
        return redirect('/my-account');
    }
}
