<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authcheck
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

        if (session()->has('username') && ($request->path() == 'login' || $request->path() == 'register')) {

            return back();
        }
        if (!(session()->has('username')) && ($request->path() == 'book' || $request->path() == 'account')) {

            return redirect('/login')->with('log', 'you most be login');
        }

        // if(!session()->has('username') && ($request->path() == 'login' || $request->path() == 'register')){
        //     return back();

        // }

        return $next($request);
    }
}
