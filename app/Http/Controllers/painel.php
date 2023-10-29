<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class painel extends Controller
{
    public function painel() {
        return view('site.painel');
    }
}
