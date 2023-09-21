<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function Usuarios(): HasOne
    {
        return $this->hasOne(Usuario::class);
    }
    public function Productos(): HasOne
    {
        return $this->hasOne(Producto::class);
    }
}
