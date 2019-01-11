<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function deposit(Request $request)
    {
        $user = $request->auth;
        return $this->ok('test',$user);
    }
}
