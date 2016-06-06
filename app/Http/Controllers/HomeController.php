<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\UserRolProduct;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //var_dump();
        $data = $request->session()->all();

        return view('home');
    }

    public function cambiarRol(Request $request){

        $user = \Auth::user();

        $rolProductuserId = (int) $request->rol;

        #validation role is user
        $productRols = UserRolProduct::where('user_id',$user->id)->where('id',$rolProductuserId)->first();

        if(!empty($productRols) and is_integer($rolProductuserId)):
            $request->session()->put('user.product', $rolProductuserId);
        else:
            $request->session()->put('user.product', null);
        endif;

        return redirect('/');
    }
}
