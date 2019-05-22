<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionController extends Controller
{

    function index(Request $req) {
        $collections = Collection::all();
        return view('collections.index', ['collections' => $collections]);
    }

    function create(Request $req) {
        return view('collections.create');
    }

    function store(Request $req) {
        $collection = $req->input('collection');
        Collection::create($collection);
        return redirect()->route('collections.index');
    }

    function show(Request $req, Collection $collection) {
        return view('collections.show', ['collection' => $collection]);
    }

    function edit(Request $req, Collection $collection) {
        return view('collections.edit', ['collection' => $collection]);
    }

    function update(Request $req, Collection $collection) {
        $collection->name = $req->input('collection.name');
        $collection->description = $req->input('collection.description');
        $collection->save();
        return redirect()->route('collections.show', ['collection' => $collection]);
    }

    function delete(Request $req, Collection $collection) {
        $collection->delete();
        return redirect()->route('collections.index');
    }

}
