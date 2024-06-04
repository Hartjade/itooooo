<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    public function handle(Request $request, Closure $next): Response
    {


        $type = Auth::user()->type;
        dd($type);
        if ($type == "admin") {
            return $next($request);
        } elseif ($type == "user") {
            return redirect("/");
        }

        return redirect('/login');
    }
}
