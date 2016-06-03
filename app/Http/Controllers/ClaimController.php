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

        $codigo_reclamo = '123456';

        $data = [
            'name' => $request->name,
            'codigo_reclamo' => $codigo_reclamo,
            'tipo_desconformidad' => 'Queja',
        ];



        $claim = new Claim();
        $claim->data =json_encode($data);
        $claim->codigo =$codigo_reclamo;
        $claim->office_id = 12;
        $claim->client_id = 2;
        $claim->codigo =$codigo_reclamo;
        $claim->status = '1';
        $claim->save();

        $request->subject = 'Tu reclamo ha sido registrado con exito';
        $request->email = 'vico.16c@gmail.com';

        #envio mail Confirm
        \Mail::send('claim.mailConfirm', $data, function($message) use ($request)
        {
            //asunto
            $message->subject($request->subject);
            //receptor
            $message->to($request->email);
        });

        return view('claim.messageConfirmRegister')
            ->with('productName','');

    }
}
