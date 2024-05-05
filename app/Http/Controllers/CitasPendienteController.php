<?php

namespace App\Http\Controllers;

use App\Models\CitasPendiente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CitasPendienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CitasPendienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $citasPendientes = CitasPendiente::paginate();

        return view('citas-pendiente.index', compact('citasPendientes'))
            ->with('i', ($request->input('page', 1) - 1) * $citasPendientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $citasPendiente = new CitasPendiente();

        return view('citas-pendiente.create', compact('citasPendiente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CitasPendienteRequest $request): RedirectResponse
    {
        CitasPendiente::create($request->validated());

        return Redirect::route('citas-pendientes.index')
            ->with('success', 'CitasPendiente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $citasPendiente = CitasPendiente::find($id);

        return view('citas-pendiente.show', compact('citasPendiente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $citasPendiente = CitasPendiente::find($id);

        return view('citas-pendiente.edit', compact('citasPendiente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CitasPendienteRequest $request, CitasPendiente $citasPendiente): RedirectResponse
    {
        $citasPendiente->update($request->validated());

        return Redirect::route('citas-pendientes.index')
            ->with('success', 'CitasPendiente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        CitasPendiente::find($id)->delete();

        return Redirect::route('citas-pendientes.index')
            ->with('success', 'CitasPendiente deleted successfully');
    }
}
