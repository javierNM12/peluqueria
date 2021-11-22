<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = [
        'telefono',
        'nombre',
        'web'
    ];

    public function inventario()
    {
        return $this->hasMany(Inventarios::class);
    }
}
