<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;
    protected $fillable = ["imagen"];
    public function Productos()
    {
        return $this->hasOne(Producto::class)->withTrashed();
    }
}
