<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;


class ProduitController extends Controller
{

    public function index(){
        $produits = Produit::paginate(5);
        return view("produit", compact("produits"));
    }
    public function create(){
        return view("createProduit");

    }
    // pour mettre en base de donnée
    public function store(Request $request){
        $request->validate([
            "photos" =>"required",
            "nom"=>"required",
            "prix"=>"required",
            "detail"=>"required",
            "categorie_id"=>"required"

        ]);

          // Crée un nouvel utilisateur avec les valeurs fournies
    $newProduit = new  Produit([
        "photos" => $request->photos,
        "nom" => $request->nom,
        "prix" => $request->prix,
        "detail" => $request->detail,
        "categorie_id" => $request->categorie_id
    ]);



        // // Assigne le rôle (role_id) 2 au nouvel utilisateur
        // $newProduit->role_id = 2;

        // Sauvegarde l'utilisateur en base de données
        $newProduit->save();


        return back()->with("success", "Produit ajouter avec succè!");
    }
    public function delete(Produit $produit){

        $produit->delete();
        return back()->with("successDelete", "Produit supprimer avec succès!");
    }
}

