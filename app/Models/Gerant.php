<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerant extends Model
{
    use HasFactory;

    protected $fillable = ["nom", "prenom", "phone"];

    // public function gerant(){
    //     $users = User::where('role_id',2)->get();
    // }
}



