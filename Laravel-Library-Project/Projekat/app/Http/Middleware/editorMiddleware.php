<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class editorMiddleware
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
        if (Auth::user()->privilegeLevel == 'EDITOR' || Auth::user()->privilegeLevel =='ADMINISTRATOR'){
            return $next($request);
        }else{
            return redirect('/book/books')->with('status','Nemate pristup ovoj stranici');
        }
    }
}
