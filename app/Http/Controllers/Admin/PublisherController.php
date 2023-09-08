<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('admin.publishers.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([], []);

        $data = $request->all();

        $publisher = new Publisher();

        $publisher->fill($data);

        $publisher->save();

        return to_route('admin.publishers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view('admin.publishers.show', compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('admin.publishers.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $request->validate([], []);

        $data = $request->all();

        $publisher->update($data);

        return to_route('admin.publishers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return to_route('admin.publishers.index');
    }
}
