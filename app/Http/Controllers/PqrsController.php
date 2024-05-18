<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function __invoke(){
        return view('pqrs');
    }
}
