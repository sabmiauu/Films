<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class HomeController extends Controller
{
    function index(Request $req) {
        $films = Film::all();
        return view('home.index', ['films' => $films]);
    }
}
