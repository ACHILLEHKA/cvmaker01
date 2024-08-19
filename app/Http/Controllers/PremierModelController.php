<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PremierModelController extends Controller
{

    public function premier()
    {
        $user = Auth::user();
        $info = $user->info;
        return view('premier_modele', compact('info'));
    }

    public function downloadPdfmodele1()
    {
        $user = Auth::user();
        $info = $user->info;

        $pdf = Pdf::loadView('choix1', compact('info'));

        return $pdf->download('choix1.pdf');
    }
}
