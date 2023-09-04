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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.update', $videogame);
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
                'release_date' => 'required|string',
                'min_age' => 'required|string|min:6|max:18',
            ],
            [
                'title.required' => 'Il Nome del videogioco è obbligatorio',
                'title.unique' => 'Il Nome del videogioco esiste già',
                'img_path.required' => 'L\'url è obbligatorio',
                'img_path.url' => 'L\'url deve contenere http , https',
                'description.required' => 'La descrizione è obbligatoria',
                'release_date.required' => 'La data di uscita è obbligatoria',
                'min_age.required' => 'L\' età consigliata è obbligatoria',
                'min_age.min' => 'L\' età consigliata deve essere minimo 6',
                'min_age.max' => 'L\' età consigliata deve essere massimo 18',
            ]
        );


        $videogame->update($data_new_videogame);

        return to_route('admin.show', $videogame)->with('alert-type', 'success')->with('alert-message', "$videogame->title modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $videogame = Videogame::findOrFail($id);
        $videogame->delete();

        return to_route('admin.index');
    }
}
