<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return $this->ok('Get about success', [
            'app_name' => env('APP_NAME'),
            'version' => '0.1.1-SNAPSHOT',
            'author' => 'Ipan Taufik Rahman',
        ]);
    }
}
