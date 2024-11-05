<?php

namespace App\Models\clients;

use App\Models\Mesur;
use App\Models\payements\Payement;
use App\Models\rendezVous\Rendezvous;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Payement(){
        return $this->hasOne(Payement::class);
    }

    function Mesur(){
        return $this->hasOne(Mesur::class);
    }

    function Rdv(){
        return $this->hasOne(Rendezvous::class);
    }
}
