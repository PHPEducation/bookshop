<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class checkUsers
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
        if(Auth::check())
        {   
            $edit_users = User::findOrFail( $request->route()->parameters()['id'] );
            $users = Auth::user();
            if($users == $edit_users)
            {
                return $next($request);
            } else {
                return redirect('/');
            }
        } else {
            return redirect( 'register' );
        }
    }
}
