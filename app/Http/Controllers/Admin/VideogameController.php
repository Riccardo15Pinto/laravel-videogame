<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videogame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::orderBy('updated_at', 'DESC')->get();
        return view('admin.videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $videogame = new Videogame();

        return view('admin.videogames.create', compact('videogame'));
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
                'release_date' => 'required|date',
                'min_age' => 'required|string'
            ],
            [
                'title.required' => 'Il Nome del videogioco è obbligatorio',
                'img_path.required' => 'L\'url è obbligatorio',
                'img_path.url' => 'L\'url deve contenere http , https',
                'description.required' => 'La descrizione è obbligatoria',
                'release_date.required' => 'La data di uscita è obbligatoria',
                'min_age.required' => 'L\' età consigliata è obbligatoria',

            ]
        );

        $videogame = new Videogame();

        $videogame->fill($data);

        $videogame->save();

        return to_route('admin.videogames.show', $videogame)->with('alert-message', 'Post creato con successo');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view('admin.videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        return view('admin.videogames.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data_new_videogame = $request->all();

        $request->validate(
            [
                'title' => ['required', 'string', 'max:50', Rule::unique('videogames')->ignore($videogame)],
                'description' => 'required|string|',
                'img_path' => 'required|url:http,https',
                'release_date' => 'required|date',
                'min_age' => 'required|string|',
            ],
            [
                'title.required' => 'Il Nome del videogioco è obbligatorio',
                'title.unique' => 'Il Nome del videogioco esiste già',
                'img_path.required' => 'L\'url è obbligatorio',
                'img_path.url' => 'L\'url deve contenere http , https',
                'description.required' => 'La descrizione è obbligatoria',
                'release_date.required' => 'La data di uscita è obbligatoria',
                'min_age.required' => 'L\' età consigliata è obbligatoria',

            ]
        );


        $videogame->update($data_new_videogame);

        return to_route('admin.videogames.show', $videogame)->with('alert-type', 'success')->with('alert-message', "$videogame->title modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();

        return to_route('admin.videogames.index');
    }
}
