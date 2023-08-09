<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=> 'SOMBOUGMA',
            'prenom'=> 'KARIM',
            'email'=> 'proprietaire@gmail.com',
            'phone'=> 76765656,
            'password'=> bcrypt('pass123456'),
            'role_id'=> 1
        ]);
        User::create([
            'nom'=> 'SEBGO',
            'prenom'=> 'Abdoulaye',
            'email'=> 'abdoulaye@gmail.com',
            'phone'=> 76765656,
            'password'=> bcrypt('pass123456'),
            'role_id'=> 2
        ]);
        User::create([
            'nom'=> 'BOUGMA',
            'prenom'=> 'William',
            'email'=> 'william@gmail.com',
            'phone'=> 76765656,
            'password'=> bcrypt('pass123456'),
            'role_id'=> 2
        ]);
        User::create([
            'nom'=> 'GOUBA',
            'prenom'=> 'SERGE',
            'email'=> 'serge@gmail.com',
            'phone'=> 76765656,
            'password'=> bcrypt('pass123456'),
            'role_id'=> 2
        ]);
        User::create([
            'nom'=> 'SOMBOUGMA',
            'prenom'=> 'elfi',
            'email'=> 'elfi@gmail.com',
            'phone'=> 76765656,
            'password'=> bcrypt('pass123456'),
            'role_id'=> 2
        ]);
    }
}
