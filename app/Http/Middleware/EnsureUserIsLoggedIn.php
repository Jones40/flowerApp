<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsLoggedIn
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



        // Check if password matches
        if ($request->session()->get('username')) {
            return redirect('flowers');
            return $next($request);
        } else {
            return redirect()->back()->with('status', 'Username doesnt exists');
        }
    }
}
