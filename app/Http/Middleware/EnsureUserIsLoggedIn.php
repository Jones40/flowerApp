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
        return $next($request);


        // Check if password matches
        if ($request->session()->put('username', $user->username)) {
            return redirect('flowers'); {
            }
        } else {
            return redirect()->back()->with('status', 'Username doesnt exists');
        }
    }
}
