<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;

class VoyageController extends Controller
{
    public function index()
    {
        return view('voyage.index', [
            'voyages' => Voyage::all()
        ]);
    }

    public function create()
    {
        return view('voyage.create');
    }

    public function store(StoreVoyageRequest $request)
    {
        $voyage = new Voyage();
        $voyage->nom = $request->nom;
        
        $voyage->save();
        return redirect()->route('voyage.index');
    }
    
    public function show($nom)
    {
        $voyage = Voyage::where('nom', $nom)->firstOrFail();
        return view('voyage.detail', compact('voyage'));
    }    

    public function edit(Voyage $voyage)
    {
        return view('voyage.edit', compact('voyage'));
    }

    public function update(UpdateVoyageRequest $request, Voyage $voyage)
    {
        $voyage->update($request->all());
        return to_route('voyage.index');
    }

    public function destroy($id)
    {
        $voyage = Voyage::findOrFail($id);
        $voyage->delete();

        return redirect()->route('voyage.index')
            ->with('success', 'Le voyage a été supprimé avec succès.');
    }
}