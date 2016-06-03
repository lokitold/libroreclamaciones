<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Http\Requests\StoreClaimRequest;
use App\Claim;

class ClaimController extends Controller
{
    public $productDefault = 'elcomercio.pe';

    public function index($productCode = null)
    {

        $product = Product::where('codigo', $productCode)
            ->first();

        if(empty($product)):
            $product = Product::where('codigo', $this->productDefault)
                ->first();
        endif;

        return view('claim.formRegisterClaim')
            ->with('productName',$product->name);
    }


    public function store(StoreClaimRequest $request){

        # Guardar reclamo

        $data = [
            'name' => $request->name
        ];

        $codigo_reclamo = '123456';

        $claim = new Claim();
        $claim->data =json_encode();
        $claim->codigo =$codigo_reclamo;
        $claim->status = '1';
        $claim->save();

        return view('claim.messageConfirmRegister')
            ->with('productName','');

    }
}
