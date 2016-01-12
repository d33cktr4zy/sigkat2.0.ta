<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAdmin
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
        if(! $this->user()->user_level == 1){
            return redirect()->back()->withErrors(['Unauthorized' => 'User level Anda tidak sesuai.']);
        }
        return $next($request);
    }
}
