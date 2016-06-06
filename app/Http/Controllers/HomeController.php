<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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

        $rolProductuserId = (int) $request->rol;

        if(!empty($rolProductuserId) and is_integer($rolProductuserId)):
            $request->session()->put('user.product', $rolProductuserId);
        else:
            $request->session()->put('user.product', null);
        endif;

        return redirect('/');
    }
}
