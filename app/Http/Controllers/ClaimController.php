<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Http\Requests\StoreClaimRequest;

class ClaimController extends Controller
{
    public $productDefault = 'elcomercio';

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


    public function store(StoreBlogClaimRequest $request){
        //echo "aca post";

        dd($request->all());
    }
}
