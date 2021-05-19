<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavGamesController extends Controller
{
    public function favGames(){
        return view('layout/FavGames');
    }
}
