<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected  $filleable = ["NombreCategoria", "enable"];

    public function producto(): HasOne
    {
        return $this->hasOne(Producto::class);
    }
    
}
