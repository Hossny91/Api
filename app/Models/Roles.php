<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $fillable = ["nombre_rol", "enable"];
    public function Usuarios(): HasOne
    {
        return $this->hasOne(Usuario::class);
    }
}
