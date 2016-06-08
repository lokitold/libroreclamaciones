<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\User as User;
use Illuminate\Http\Request;
use App\UserRolProduct;
use App\Role;
use App\Product;

class ProfileComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        //$users = User::all()
        $app = app();
        $request = $app->make('request');
        $user = \Auth::user();
        $idProduct = $request->session()->get('user.product', null);
        $productRols = UserRolProduct::where('user_id',$user->id)
            ->where('product_id',$idProduct)->first();

        $dataRol = Role::find($productRols->rol_id);
        $dataProduct = Product::find($idProduct);
        $dataUserRolProducts = UserRolProduct::where('user_id',$user->id)
            ->with('rol', 'product')->get();

        #menu seguridad
        $menuSeguridad = FALSE;
        if(\Request::is('products*') or \Request::is('users*') or \Request::is('permissions*')  or \Request::is('rols*') or \Request::is('permissionRoles*') or \Request::is('userRolProducts*') ):
            $menuSeguridad = TRUE;
        endif;

        $view->with('dataRol',$dataRol);
        $view->with('dataProduct',$dataProduct);
        $view->with('dataUserRolProducts',$dataUserRolProducts);
        $view->with('menuSeguridad',$menuSeguridad);

    }

}