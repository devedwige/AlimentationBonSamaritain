<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = ['produitFrais','produitSurgeles','epicerieSeche','produitLaitiers','boisson','produitPourEnfant','alimentEnConserve'];
        foreach ($categories as $categorie) {
            Categorie::create([
                'type' => $categorie,
                'created_at' => now(),
                'updated_at' =>now()
            ]);
        }
    }
}
