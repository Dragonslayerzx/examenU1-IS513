<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAsiento extends Model
{
    protected $table = "tipo_asiento";
    protected $primaryKey = "idTipoAsiento";

    public $timestamps = false;

    use HasFactory;
}
