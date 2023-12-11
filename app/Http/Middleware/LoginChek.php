<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginChek
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
        if(!session()->has('loggedInUser') && ($request->path() != '/connexion')){
            return redirect('/connexion');
        }

        if(session()->has('loggedInUser') && ($request->path() == '/connexion')){
            return back();
        }

        return $next($request);
    }
}
