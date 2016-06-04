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
        $productRols = UserRolProduct::where('user_id',$user->id)->where('product_id',$idProduct)->first();

        $dataRol = Role::find($productRols->rol_id);
        $dataProduct = Product::find($idProduct);



//        $tienda = $app->make('dataTienda');
//        $catalogo = $app->make('dataCatalogo');
//
//        $seccion = strip_tags(urldecode(preg_replace('/\s+/', ' ', $request->input('seccion'))));
//
//        $producto = [
//            'vivanda-organicos'         => ['title' => 'Orgánicos', 'image' => 'img-product01'],
//            'vivanda-naturales'         => ['title' => 'Naturales', 'image' => 'img-product02'],
//            'vivanda-singluten'        => ['title' => 'Sin Gluten', 'image' => 'img-product03'],
//            'vivanda-bajosenazucar'   => ['title' => 'Bajos en azúcar', 'image' => 'img-product04'],
//            'vivanda-frutas'            => ['title' => 'Frutas', 'image' => 'img-product05'],
//            'vivanda-verduras'          => ['title' => 'Verduras', 'image' => 'img-product06'],
//            'vivanda-productosdelespecial'            => ['title' => 'Especiales', 'image' => 'img-product05'],
//        ];
//
//        $view->with('seccion',$seccion);
//        $view->with('tienda',$tienda);
        $view->with('dataRol',$dataRol);
        $view->with('dataProduct',$dataProduct);



    }

}