<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\User;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {

        $guards = empty($guards) ? [null] : $guards;


        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::USER_HOME);
            }
         else{
            if (Auth::check()) {
                $currentUser = User::find(Auth::user()->id);
                if($currentUser->hasAnyRole('admin'))   {
                    return redirect(RouteServiceProvider::USER_HOME);
                }
                else  if($currentUser->hasAnyRole('member'))   {
                    return redirect(RouteServiceProvider::USER_HOME);
                }
                }
         }


        }

        return $next($request);
    }
}
