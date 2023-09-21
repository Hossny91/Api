<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    use HasFactory;
    
    public function categorias()
    {
        return $this->hasOne(categoria::class)->withTrashed();
    }
    public function Productos()
    {
        return $this->hasOne(Producto::class)->withTrashed();
    }
}
