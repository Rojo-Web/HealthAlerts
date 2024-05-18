<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticasController extends Controller
{
    public function __invoke(){
        return view('politicas');
    }
}
