<?php

namespace App\Http\Middleware;

use Closure, Session;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if (Session::get('status') == null) {
            return Redirect::to('login');
        } else if (\Auth::user()->status == $level) {
            return $next($request);
        }
        // abort(403);
        return redirect()->back();
    }
}
