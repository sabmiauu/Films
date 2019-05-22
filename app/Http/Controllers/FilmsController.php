<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Genre;

class FilmsController extends Controller
{
    function index(Request $req) {
        $films = Film::all();
        return view('films.index', ['films' => $films]);
    }

    function create(Request $req) {
        $genres = Genre::all();
        return view('films.create', ['genres' => $genres]);
    }

    function store(Request $req) {
        $film = $req->input('film');
        Film::create($film);
        return redirect()->route('films.index');
    }

    function show(Request $req, Film $film) {
        return view('films.show', ['film' => $film]);
    }

    function edit(Request $req, Film $film) {
        $genres = Genre::all();
        return view('films.edit', ['film' => $film, 'genres' => $genres]);
    }

    function update(Request $req, Film $film) {
        $film->name = $req->input('film.name');
        $film->year = $req->input('film.year');
        $film->duration = $req->input('film.duration');
        $film->trailer = $req->input('film.trailer');
        $film->genre_id = $req->input('film.genre_id');
        $film->save();
        return redirect()->route('films.show', ['film' => $film]);
    }

    function delete(Request $req, Film $film) {
        $film->delete();
        return redirect()->route('films.index', ['film' => $film]);
    }


}
