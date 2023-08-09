<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\ProduitController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('acceuil');
// pour se connecter

Route::get('connexion', [authController::class,'connexion']);
Route::post('authentification', [authController::class,'authenticate'])->name('connexion');

// pour ajouter et supprimer un gerant
Route::get("/gerant", [GerantController::class, "index"])->name("gerant");
Route::get("/gerant/create", [GerantController::class, "create"])->name("gerant.create");

Route::post("/gerant/create", [GerantController::class, "store"])->name("gerant.ajouter");
Route::delete("/gerant/{gerant}", [GerantController::class, "delete"])->name("gerant.supprimer");

// pour ajouter et supprimer un produit
Route::get("/produit", [ProduitController::class, "index"])->name("produit");
Route::get("/produit/create", [ProduitController::class, "create"])->name("produit.create");

Route::post("/produit/create", [ProduitController::class, "store"])->name("produit.ajouter");
Route::delete("/produit/{produit}", [ProduitController::class, "delete"])->name("produit.supprimer");

// pour se deconnecter
Route::post('deconnexion', [authController::class,'logout'])->name('logout');
