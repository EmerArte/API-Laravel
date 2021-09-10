<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membersia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'Precio',
        'tipo_pago'
    ];
}
