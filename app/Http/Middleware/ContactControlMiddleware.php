<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactControlMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if($request->subject == null){
            return redirect()->back();
        }else{
            return $next($request);
        }
    }
}
