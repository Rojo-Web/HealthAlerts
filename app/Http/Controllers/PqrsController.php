<?php

namespace App\Http\Controllers;

use App\Mail\PqrsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PqrsController extends Controller
{
    public function index(){
        return view('pqrs');
    }

    public function store(Request $request){

        $request->validate([
            'tipo' => 'required',
            'texto' => 'required'
        ]);

        Mail::to('healthalerts@gmail.com')
            ->send(new PqrsMailable($request->all()));
        
        session()->flash('info', 'PQRS enviado correctamente');

        return redirect()->route('pqrs.index');
    }
}
