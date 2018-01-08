<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NomeController extends Controller
{
    public function getHome($nome) {
        return view('inicio')->with(['nome' => $nome]);
    }

    public function anyPing() {
        return 'ping';
    }
}
