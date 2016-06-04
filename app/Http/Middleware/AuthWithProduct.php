<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\UserRolProduct;

class AuthWithProduct
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
        $user = \Auth::user();
        $idProduct = $request->session()->get('user.product', null);

        $productRols = UserRolProduct::where('user_id',$user->id)->where('product_id',$idProduct)->first();

        if(empty($productRols)):
            Auth::guard()->logout();
            return redirect('login')->with('message', 'No cuentas con acceso a ningun producto del sistemas por favor comunicate con el administrador.');
        endif;

        return $next($request);
    }
}
