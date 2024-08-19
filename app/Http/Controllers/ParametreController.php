<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParametreController extends Controller
{
    public function param(){
        $info = Auth::user()->info;
        return view('parametre' ,compact('info'));
    }
}
