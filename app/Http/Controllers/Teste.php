<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Teste extends Controller
{
    public function show()
    {
         return view('teste.teste');
    }
}
