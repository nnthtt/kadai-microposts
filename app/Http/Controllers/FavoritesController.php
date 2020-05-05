<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $Id)
    {
        \Auth::user()->favorite($Id);
        return back();
    }

    public function destroy($Id)
    {
        \Auth::user()->unfavorite($Id);
        return back();
    }
}
