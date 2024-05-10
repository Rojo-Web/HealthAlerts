<?php

namespace App\Http\Controllers;

use App\Models\ProximasCita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProximasCitaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProximasCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $proximasCitas = ProximasCita::paginate();

        return view('proximas-cita.index', compact('proximasCitas'))
            ->with('i', ($request->input('page', 1) - 1) * $proximasCitas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $proximasCita = new ProximasCita();

        return view('proximas-cita.create', compact('proximasCita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProximasCitaRequest $request): RedirectResponse
    {
        ProximasCita::create($request->validated());

        return Redirect::route('proximasCitas.index')
            ->with('success', 'ProximasCita created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $proximasCita = ProximasCita::find($id);

        return view('proximas-cita.show', compact('proximasCita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $proximasCita = ProximasCita::find($id);

        return view('proximas-cita.edit', compact('proximasCita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProximasCitaRequest $request, ProximasCita $proximasCita): RedirectResponse
    {
        $proximasCita->update($request->validated());

        return Redirect::route('proximasCitas.index')
            ->with('success', 'ProximasCita updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ProximasCita::find($id)->delete();

        return Redirect::route('proximasCitas.index')
            ->with('success', 'ProximasCita deleted successfully');
    }
}
