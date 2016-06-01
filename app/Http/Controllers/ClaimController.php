<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClaimController extends Controller
{
    public $productDefault = 'elcomercio';

    public function index($productCode = null)
    {
        if(empty($productCode)):
            $productCode = $this->productDefault;
        endif;

        return view('claim.formRegisterClaim')
            ->with('productCode',$productCode);
    }
}
