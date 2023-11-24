<?php

namespace App\Http\Controllers;


use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Corriger la numérotation
        $counter = 1;
        //Charger les données de la DB
        $produits = Produits::all();
        return view('produits.index', compact('produits'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Appel du formulaire d'ajout du client
        return view('produits.create');
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
        $produits = Produits::findOrfail($id);;
        return view('produits.details', compact('produits'));
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
