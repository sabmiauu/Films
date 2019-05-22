<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Film;

class CollectionFilmController extends Controller
{
    function edit(Request $req, Collection $collection) {
        $film = Film::all();
        return view ('collections_films.edit', ['collection' => $collection, 'film' => $film]);
    }

    function update(Request $req, Collection $collection) {
        $film = $req->input('films');
        $collection->film()->attach($film);
        return redirect()->route('collections.show', ['collection' => $collection]);
    }

}
