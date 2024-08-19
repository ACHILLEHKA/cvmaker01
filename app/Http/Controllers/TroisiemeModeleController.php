<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TroisiemeModeleController extends Controller
{
    public function troisieme()
    {
        $user = Auth::user();
        $info = $user->info;
        return view('troisieme_modele', compact('info'));
    }

    public function downloadPdfmodele3()
    {
        $user = Auth::user();
        $info = $user->info;

        $pdf = Pdf::loadView('modele3', compact('info'));

        return $pdf->download('modele3.pdf');
    }
}
