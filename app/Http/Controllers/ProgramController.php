<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function tanam() {
        return view('program.tanam');
    }
    public function edukasi() {
        return view('program.edukasi');
    }
}

