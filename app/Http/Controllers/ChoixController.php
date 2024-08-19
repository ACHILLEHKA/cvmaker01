<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Info; // Assurez-vous que ce modèle existe et est configuré correctement

class ChoixController extends Controller
{

    public function showModel1()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('choix1', compact('info'));
    }


    public function showModel2()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('choix2', compact('info'));
    }


    public function showModel3()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('choix3', compact('info'));
    }

 
    public function showModel4()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('choix4', compact('info'));
    }


    public function showModel5()
    {
        $user = Auth::user();
        $info = Info::where('user_id', $user->id)->first();
        return view('choix5', compact('info'));
    }
}

