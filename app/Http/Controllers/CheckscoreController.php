<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckscoreController extends Controller
{
    //
    public function checkscore() {
        return view('frontend.checkscore');
    }
}
