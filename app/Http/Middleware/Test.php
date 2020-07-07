<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Test
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
    //     if(Auth::User()->check()){
    //         return view('accueil-admin');
    //     }
    //     // if(Auth::User()->role=='admin'){
    //     //     return view('accueil-admin');
    //     // }
    //     // else{
    //     //     return view('auth.login');
    //     // }
    //     return $next($request);
    // }
    
}
