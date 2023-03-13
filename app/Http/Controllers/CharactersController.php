<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Http::get('https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=4a7e850dadd895c0107bec30d0b02fd8&hash=5d08fff1c1eafed31bd779e857334dd7');

        $jsonData = $characters->json();

        return Inertia::render("Characters/Index");
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
