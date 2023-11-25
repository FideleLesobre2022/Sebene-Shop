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
        //// Validation des champs de formulaire
        // Sachant que validate est inclu dans la classe Request
        $request->validate
        ([
            'nom_produit' => 'required|unique:produits,nom_produit',
            'prix' => 'required',
            'date_fabrication_produit' => 'required',
            'date_expiration_produit' => 'required'
        ]);

        // 1: Ajout du client à la base de données
        // 1. 1: Appel de la classe Client étant égal à la classe définie dans Models.Client
        // On stocke le new Client dans une variable pour pas qu'on l'invoque à chaque élement de la Classe
        $produits = new Produits;

        // 1. 2: Compléter les élements contenus dans $request comme décrit sur la fonction store()
        // 1. 3: Comme Client est une classe, indexer chaque variable; préciser la valeur
        // Mais en décomposant aussi la variable $request qui est une classe de Request()
        $produits->nom_produit = $request->nom_produit;
        $produits->description_produit = $request->description_produit;
        $produits->prix = $request->prix;
        $produits->date_fabrication_produit = $request->date_fabrication_produit;
        $produits->date_expiration_produit = $request->date_expiration_produit;
        // 1. 4: On précise l'action à faire, enregistrer le nouveau client $client = new Client
        $produits->save();

        // 1. 5: Après l'enregistrement au aura besoin d'être rediriger sur une page pour pas avoir une page blanche
        // !! Ici on nous rediriger vers l'url localhost:post_choisi/clients
        return redirect(route('produits.index'));
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
        //Avant de récupérer le formulaire, récupérer d'abord des informations du client à l'$id choisi
        $produits = Produits::findOrfail($id);

        //Appeler le formulaire en tenant compte de l'id séléctionner
        return view('produits.edit', compact('produits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des champs de formulaire
        // Sachant que validate est inclu dans la classe Request
        $request->validate
        ([
            'nom_produit' => 'required|unique:produits,nom_produit',
            'prix' => 'required',
            'date_fabrication_produit' => 'required',
            'date_expiration_produit' => 'required'
        ]);

        // Identifier d'abord l'élémnt à mettre à jour
        $produits = Produits::findOrfail($id);
        // Donnez les valeurs équivalent aux noms des champs sur le formulaire
        $produits->nom_produit = $request->get('nom_produit');
        $produits->prix = $request->get('prix');
        $produits->description_produit = $request->get('description_produit');
        $produits->date_fabrication_produit = $request->get('date_fabrication_produit');
        $produits->date_expiration_produit = $request->get('date_expiration_produit');
        // Enregistrez les information de mise à jour
        $produits->save();

        // 1. 5: Après l'enregistrement au aura besoin d'être rediriger sur une page pour pas avoir une page blanche
        // !! Ici on nous rediriger vers l'url localhost:post_choisi/clients
        return redirect(route('produits.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Pour supprimer un élément on doit
        // 1: Localiser l'ID qu'on veut supprimer
        $produits = Produits::find($id);
        // 2: On le supprime
        $produits->delete();
        return redirect()->route('produits.index')->with('Success', 'Client a été supprimer avec succes');
        // Attention:
        //           - Ici la variable $client est toujours égal à new Client
        //           - Un id supprimer ne peut plus être récuperer
        //              - Si tu supprime l'$id 1 donc, il y aura plus jamais d'$id 1
        //              Voire concept de $id autoincrement
    }
}
