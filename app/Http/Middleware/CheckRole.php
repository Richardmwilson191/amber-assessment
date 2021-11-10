<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $userRole = auth()->user()->role;
            $admin = ['course.index', 'student.index', 'course.schedule', 'teacher.index'];
            $teacher = ['teacher.schedule'];
            $student = ['student.schedule'];

            if ($request->routeIs($admin) && $userRole !== 'admin') {
                abort(403, 'Unauthorized Access');
            }
            if ($request->routeIs($teacher) && $userRole !== 'teacher') {
                abort(403, 'Unauthorized Access');
            }
            if ($request->routeIs($student) && $userRole !== 'student') {
                abort(403, 'Unauthorized Access');
            }

            return $next($request);
        } catch (\Throwable $th) {
            abort(403, 'Unauthorized Access');
        }
    }
}
