<?php

namespace App\Models\depenses;

use App\Models\personnels\Personnel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Personnel(){
        return $this->belongsTo(Personnel::class, 'id_personnel');
    }
}
