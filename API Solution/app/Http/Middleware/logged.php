<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Token;

class logged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $key = $request->header("Authorization");
        if($key !=null){
            $token = Token::where('tkey',$key)
                    ->whereNull('expired_at')
                     ->first();
            if($token){
                return $next($request);
            }
            return response()->json(["msg"=>"Supplied Token is invalid or expired"],401);
        }
        return response()->json(["msg"=>"Not token supplied"],401);
    }
}

