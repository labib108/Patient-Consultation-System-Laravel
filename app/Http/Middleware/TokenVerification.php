<?php

namespace App\Http\Middleware;

use App\helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token=$request->cookie('token');
        $result=JWTToken::VerifyToken($token);
        if($result=="unauthorized"){
            return redirect('/login');
        }
        else{
            $request->headers->set('email',$result->userEmail);
            return $next($request);
        }
    }
}
