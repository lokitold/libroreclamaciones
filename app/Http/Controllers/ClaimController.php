<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClaimController extends Controller
{
    public function index()
    {
        return view('claim.formRegisterClaim');
    }
}
