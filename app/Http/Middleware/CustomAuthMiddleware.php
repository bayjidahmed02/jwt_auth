<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\JWTtoken;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): RedirectResponse
    {
        $token = $request->cookie('token');
        $result = JWTtoken::verifyToken($token);

        if ($result == 'unauth') {
            return  redirect('/login');
        } else {

            $request->headers->set('email', $result->userEmail);
            $request->headers->set('id', $result->userId);
            $request->headers->set('is_admin', $result->is_admin);

            if ($result->is_admin) {
                return redirect('/admin');
            } else {
                return $next($request);
            }
        }
    }
}
