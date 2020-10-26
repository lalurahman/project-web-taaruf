<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        // if(in_array($request->user()->level, $levels)){
        //     return $next($request);
        // }
        // dd($levels);
        // if(Auth::user() ){
        //     return $next($request);
        // } 
        // dd(Auth::user()->roles);
        // foreach ($levels as $level) {
        //     if(Auth::user()->roles == $level){
        //         return $next($request);
        //     }
        // }
        // if(Auth::user()->roles == 'ADMIN'){
        //     return $next($request);
        // }
        // if (Auth::user()->roles == 'ADMIN' || Auth::user()->roles == 'USER') {
        //     return $next($request);
        // } 
        if(Auth::user() && Auth::user()->roles == 'ADMIN'){
            return $next($request);
        }
        return redirect('login');
    }
}
