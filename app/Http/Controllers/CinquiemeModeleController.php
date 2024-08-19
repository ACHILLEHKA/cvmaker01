<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CinquiemeModeleController extends Controller
{
    public function cinquieme()
    {
        $user = Auth::user();
        $info = $user->info;
        return view('cinquieme_modele', compact('info'));
    }

    public function downloadPdfmodele5()
    {
        $user = Auth::user();
        $info = $user->info;
        $pdf = Pdf::loadView('choix5', compact('info'));
        return $pdf->download('choix5.pdf');
    }
}
