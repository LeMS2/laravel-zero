<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
   public function index()
    {
        $nome = "Letícia";
        return view('hello', compact('nome'));
    }
}
