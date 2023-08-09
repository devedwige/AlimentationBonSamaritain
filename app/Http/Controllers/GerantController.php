<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GerantController extends Controller
{

    public function index(){
        $users = User::where("role_id", 2)->paginate(5);
        return view("gerant", compact("users"));
    }
    public function create(){
        return view("createGerant");

    }
    // pour mettre en base de donnée
    public function store(Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "password"=>"required"
        ]);

          // Crée un nouvel utilisateur avec les valeurs fournies
    $newUser = new User([
        "nom" => $request->nom,
        "prenom" => $request->prenom,
        "email" => $request->email,
        "phone" => $request->phone,
        "password" => $request->password
    ]);

       // Hache le mot de passe et attribue-le à l'utilisateur
       $newUser->password = Hash::make($request->password);


        // Assigne le rôle (role_id) 2 au nouvel utilisateur
        $newUser->role_id = 2;

        // Sauvegarde l'utilisateur en base de données
        $newUser->save();


        return back()->with("success", "Gerant ajouter avec succè!");
    }
    public function delete(User $user){
        $nom_complet = $user->nom." ".$user->prenom;
        $user->delete();
        return back()->with("successDelete", "Gerant '$nom_complet' supprimer avec succès!");
    }
}
