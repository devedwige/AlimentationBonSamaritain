<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(): void
        {
            $roles = ['Administrateur','Gerant'];
            foreach ($roles as $role) {
                Role::create([
                    'intitule' => $role,
                    'created_at' => now(),
                    'updated_at' =>now()
                ]);
            }
        }
 }

