<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $fillable = ["Cantidad","subtotal","descuento"];
    public function ventas()
    {
        return $this->hasOne(Venta::class)->withTrashed();
    }
    public function Productos()
    {
        return $this->hasOne(Producto::class)->withTrashed();
    }

}
