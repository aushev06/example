<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // проверка, если у пользователя в колонке role нет admin, значит переводим его на страницу 404.
        if ($request->user()->role !== User::ROLE_ADMIN) {
            return redirect('/404');
        }
        return $next($request);
    }
}
