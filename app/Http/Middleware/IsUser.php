<?php

namespace App\Http\Middleware;

// use Closure, Session, Redirect;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
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
        // if (Session::get('roles') == null) {
        //     return Redirect::to('login');
        // } else if (Auth::user()->status == $level) {
        //     return $next($request);
        // }
        // if (Auth::user()->roles == 'ADMIN' || Auth::user()->roles == 'USER') {
        //     return $next($request);
        // } 
        // if($request->user()->roles == 'USER'){
        //     return $next($request);
        // } else if($request->user()->roles == 'ADMIN') {
        //     return redirect()->route('dashboard');
        // }
        
        // if(Auth::user() && Auth::user()->roles == 'USER'){
        //     if(Auth::user()->is_active == 1){
        //         return $next($request);
        //     } else {
        //         return redirect()->route('register-success');
        //     }

        // }
        return redirect('login');
    }
}
