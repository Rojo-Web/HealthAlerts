<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $search = $request->query('search');
        $pacientesQuery = Paciente::query();

        if ($search) {
            $pacientesQuery->where('id', 'like', '%' . $search . '%')
                ->orWhere('cedula', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%')
                ->orWhere('celular', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('notas', 'like', '%' . $search . '%');
        }

        $pacientes = $pacientesQuery->paginate();

        return view('paciente.index', compact('pacientes', 'search'))
            ->with('i', ($request->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $paciente = new Paciente();

        return view('paciente.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PacienteRequest $request): RedirectResponse
    {
        Paciente::create($request->validated());

        return Redirect::route('pacientes.index')
            ->with('success', 'Paciente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        if(strlen($id)>=5){
            $paciente = Paciente::where('cedula', $id)->first();
        }else{
        $paciente = Paciente::find($id);
        }

        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $paciente = Paciente::find($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PacienteRequest $request, Paciente $paciente): RedirectResponse
    {
        $paciente->update($request->validated());

        return Redirect::route('pacientes.index')
            ->with('success', 'Paciente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Paciente::find($id)->delete();

        return Redirect::route('pacientes.index')
            ->with('success', 'Paciente deleted successfully');
    }
}
