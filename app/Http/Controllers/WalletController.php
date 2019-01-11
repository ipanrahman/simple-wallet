<?php

namespace App\Http\Controllers;

use App\User;
use App\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function index(Request $request)
    {
        $wallet = $request->user()->wallet();
        return $this->ok('Get wallet success.', $wallet);
    }

    public function deposit(Request $request)
    {
        $user = $request->auth;
        return $this->ok('test', $user);
    }
}
