<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        Produit::create([
            'photos'=> 'rizière.jpg',
            'nom'=> 'RIZ',
            'prix'=> 12500,
            'categorie_id'=> 1,
            'detail'=>'100% naturel produit au Burkina faso'
        ]);
        Produit::create([
            'photos'=> 'panier.jpg',
            'nom'=> 'Ensemble',
            'prix'=> 10000,
            'categorie_id'=> 2,
            'detail'=>'produit de bon qualité déja pret pour votre utilisation'
        ]);
        Produit::create([
            'photos'=> 'sac.jpg',
            'nom'=> 'Gros sac',
            'prix'=> 4600,
            'categorie_id'=> 4,
            'detail'=>'produit 100% naturel fraichement ceuillis dans notre jardin'
        ]);
    }
}
