<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminKey
{
    public function handle(Request $request, Closure $next)
    {
        $getParams = $request->all();

        if (!empty($getParams) && isset($getParams['key']) && $getParams['key'] != '123') {
            return redirect('/');
        }

        return $next($request);
    }
}
