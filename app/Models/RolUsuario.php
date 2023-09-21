<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    use HasFactory;
    public function usuarios(): HasOne
    {
        return $this->hasOne(Usuario::class);
    }
    public function Rol(): HasOne
    {
        return $this->hasOne(Roles::class);
    }
}
