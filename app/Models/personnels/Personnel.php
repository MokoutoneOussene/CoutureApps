<?php

namespace App\Models\personnels;

use App\Models\depenses\Depense;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Depense(){
        return $this->hasOne(Depense::class);
    }
}
