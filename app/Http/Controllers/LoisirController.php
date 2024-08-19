<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Loisir;

class LoisirController extends Controller
{
    public function showForm()
    {
        $user = Auth::user();
        $loisirs = $user->info->loisirs;
        return view('etape5', compact('loisirs'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nom_loisir' => 'string|max:20',
        ], [
            'nom_loisir.string' => 'Le nom du loisir doit être une chaîne de caractères.',
            'nom_loisir.max' => 'Le nom du loisir ne doit pas dépasser 20 caractères.',
        ]);

        $user = Auth::user();
        if ($user->info->loisirs->count() >= 6) {
            return redirect()->back()->withErrors(['nom_loisir' => 'Vous ne pouvez pas ajouter plus de 6 loisirs.'])->withInput();
        }
        $data = [
            'nom_loisir' => $request->input('nom_loisir'),
            'info_id' => $user->info->id,
        ];
        Loisir::create($data);
        return redirect()->route('showLoisirForm')->with('success', 'Loisir ajouté avec succès.');
    }
}
