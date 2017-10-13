<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userrole_student
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
        if(Auth::guard('user')->check())
        {
            $admin= User::where('id',Auth::guard('user')->id())->where(['active'=>'1','user_role'=>'2'])->first();//dd($admin);
            if(!$admin)
            {
                 $admin= User::where('id',Auth::guard('user')->id())->where(['active'=>'1','user_role'=>'1'])->first();
                 if($admin){
                    return redirect('managecountry');    
                 }
                Auth::guard('user')->logout();
                return abort("403","Invalid access");
            }
            return $next($request);
        }
        else 
        {
            return redirect()->intended('login')->with('message', 'Please Login to access admin area');
        }
    }
}
