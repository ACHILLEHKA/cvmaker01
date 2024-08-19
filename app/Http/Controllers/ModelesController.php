<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Info;
use Mpdf\Mpdf;

class ModelesController extends Controller
{
    public function modele1()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('modele1', compact('info'));
    }

    public function modele2()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('modele2', compact('info'));
    }

    public function modele3()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('modele3', compact('info'));
    }

    public function modele4()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('modele4', compact('info'));
    }

    public function modele5()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('modele5', compact('info'));
    }

    public function downloadModele1()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        $pdf = Pdf::loadView('modele1', compact('info'))->setPaper('a4', 'portrait');;
        return $pdf->download('modele1.pdf');
    }

    public function downloadModele2()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();

        $pdf = Pdf::loadView('modele2', compact('info'))->setPaper('a4', 'portrait');;

        return $pdf->download('modele2.pdf');
    }

    public function downloadModele3()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();

        $pdf = Pdf::loadView('modele3', compact('info'))->setPaper('a4', 'portrait');;

        return $pdf->download('modele3.pdf');
    }

    public function downloadModele4()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();

        $pdf = Pdf::loadView('modele4', compact('info'))->setPaper('a4', 'portrait');;

        return $pdf->download('modele4.pdf');
    }

    public function downloadModele5()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();

        $pdf = Pdf::loadView('modele5', compact('info'))->setPaper('a4', 'portrait');;

        return $pdf->download('modele5.pdf');
    }
}
