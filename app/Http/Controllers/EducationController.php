<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'formation' => 'required|string',
            'titre' => 'required|string',
            'ecole' => 'required|string',
            'lieu' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        Education::create($validated);

        return redirect()->route('etape2')->with('success', 'Formation enregistrée avec succès');
    }
}
