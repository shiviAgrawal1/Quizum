<?php

namespace App\Http\Middleware;

use Closure;
use App\Ip;

class QuizMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {  $ip= $_SERVER['REMOTE_ADDR'];
    //    $c=Ip::where('ip',$ip)->first();
    //     if(isset($c) and isset($_COOKIE['user_id']) and ($_COOKIE['user_id']==$c->id))
    //         return $next($request);
        
    //     return redirect('/');
    // }
}
