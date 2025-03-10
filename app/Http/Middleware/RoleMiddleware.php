<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if (auth()->check() && auth()->user()->role === $role) {
            return $next($request); // ادامه درخواست
        }

        // در صورتی که نقش کاربر مطابقت نداشته باشد
        return redirect()->route('403');
    }
}
