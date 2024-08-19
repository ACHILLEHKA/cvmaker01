<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChoixModeleController extends Controller
{
    public function choix()
    {
        $user=Auth::user();
        $info = $user->info;
        return view('choix_modele', compact('info'));
    }
}
