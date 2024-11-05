<?php

namespace App\Models\modeles;

use App\Models\payements\Payement;
use App\Models\rendezVous\Rendezvous;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Payement(){
        return $this->hasOne(Payement::class);
    }

    function Rdv(){
        return $this->hasOne(Rendezvous::class);
    }
}
