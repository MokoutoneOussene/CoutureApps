<?php

namespace App\Models;

use App\Models\clients\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesur extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Client(){
        return $this->belongsTo(Client::class, 'id_client');
    }
}
