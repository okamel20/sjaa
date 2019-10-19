<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Request;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next = null, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Request::route()->getPrefix() == '/admin') {
                if (Request::route()->getAction('as')) {
                    $role = \App\Groups_route::where('group_id',admin()->user()->group_id)->where('route',Request::route()->getAction('as'))->first();
                    if ($role) {
                        return $next($request);
                    }else{
                        session()->flash('error','ليس لديك الصلاحية');
                        return redirect('admin');
                    }
                }else{
                    return $next($request);
                }
            }else{
                return redirect('admin/login');
            }

        }else{
            return redirect('admin/login');
        }
        
    }
}
