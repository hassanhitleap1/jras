<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class RedirectIfAuthenticated
{

    private $studentRedirectTo = '/home';
    private $adminRedirectTo = '/admin';
    private $teacherRedirectTo = '/teacher';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->permission == User::Student){
                return redirect($this->studentRedirectTo);
            }elseif (Auth::user()->permission == User::Teacher) {
                return redirect($this->teacherRedirectTo);
            }else {
                return redirect($this->adminRedirectTo);
            } 
            
        }

        return $next($request);
    }
}
