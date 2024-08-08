<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{
    public function soon(){
        return view('jobs');
    }
}
