<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeuxiemModeleController extends Controller
{
    public function deuxieme()
    {
        $user = Auth::user();
        $info = $user->info;
        return view('deuxieme_modele', compact('info'));
    }

    public function downloadPdfmodele2()
    {
        $user = Auth::user();
        $info = $user->info;

        $pdf = Pdf::loadView('choix2', compact('info'));

        return $pdf->download('choix2.pdf');
    }
}
