<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $videogames = Videogame::orderBy('updated_at', 'DESC')->get();
        return view('guests.home', compact('videogames'));
    }
}
