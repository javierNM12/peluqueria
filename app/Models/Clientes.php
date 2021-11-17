<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'descripcion'
    ];

    public function citas()
    {
        return $this->hasMany(Citas::class);
    }
}
