<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    //Default handle method
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }


    public function handle($request, Closure $next){
        $id = 1;
        $merge_data = [
            'id' => $id,
            'msg' => '確認です'
        ];

        //mergeメソッドはrequestが持つメソッドで、requestにデータを追加することができる
        $request->merge($merge_data);
        return $next($request);
    }
}
