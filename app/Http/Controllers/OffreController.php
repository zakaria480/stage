<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    public function create()
    {
        return view('offres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'depart_ville' => 'required|string|max:255',
            'arrivee_ville' => 'required|string|max:255',
            'depart_time' => 'required|date',
            'details' => 'nullable|string',
            'status' => 'required|in:disponible,non disponible',
        ]);

        Offre::create([
            'user_id' => Auth::id(),
            'depart_ville' => $request->depart_ville,
            'arrivee_ville' => $request->arrivee_ville,
            'depart_time' => $request->depart_time,
            'details' => $request->details,
            'status' => $request->status,
        ]);

        return redirect()->route('offres')->with('success', 'Offre créée avec succès!');
    }
}