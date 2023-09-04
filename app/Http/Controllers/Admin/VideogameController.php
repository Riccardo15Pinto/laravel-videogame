<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videogame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videogame = new Videogame();

        return view('admin.create', compact('videogame'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate(
            [
                'title' => 'required|string|max:50',
                'description' => 'required|string',
                'img_path' => 'required|url:http,https',
                'release_date' => 'required|string',
                'min_age' => 'required|string|min:6|max:18'
            ],
            [
                'title.required' => 'Il Nome del videogioco è obbligatorio',
                'img_path.required' => 'L\'url è obbligatorio',
                'img_path.url' => 'L\'url deve contenere http , https',
                'description.required' => 'La descrizione è obbligatoria',
                'release_date.required' => 'La data di uscita è obbligatoria',
                'min_age.required' => 'L\' età consigliata è obbligatoria',
                'min_age.min' => 'L\' età consigliata deve essere minimo 6',
                'min_age.max' => 'L\' età consigliata deve essere massimo 18',
            ]
        );

        $videogame = new Videogame();

        $videogame->fill($data);

        $videogame->save();

        return to_route('admin.show', $videogame)->with('alert-message', 'Post creato con successo');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        //
    }
}
