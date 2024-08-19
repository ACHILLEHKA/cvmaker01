<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuatriemeModeleController extends Controller
{
    public function quatrieme()
    {
        $user = Auth::user();
        $info = $user->info;
        return view('quatrieme_modele', compact('info'));
    }
    public function downloadPdfmodele4()
    {
        $user = Auth::user();
        $info = $user->info;
        $pdf = Pdf::loadView('choix4', compact('info'));

        return $pdf->download('choix4.pdf');
    }
}
