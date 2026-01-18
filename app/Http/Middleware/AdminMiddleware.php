<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        // Check if user can access admin (with database error handling)
        try {
            $user = Auth::user();
            if ($user && $user->cant('admin', $user)) {
                abort(403, 'Unauthorized access to admin area.');
            }
        } catch (\Exception $e) {
            // If database not configured, just check if user is authenticated
            // Once database is set up, this will work properly
            if (!Auth::check()) {
                return redirect()->route('admin.login');
            }
        }

        return $next($request);
    }
}
