<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    protected $table = 'vuelos';
    protected $primaryKey = 'numeroVuelo'; 
    protected $keyType = 'string';
    public $incrementing = false;

    public $timestamps = false;

    use HasFactory;
}
