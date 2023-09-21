<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ["user","Email", "password", "image"];

    public function Roles(): HasOne
    {
        return $this->hasOne(Roles::class);
    }
    public function productos(): HasOne
    {
        return $this->hasOne(Producto::class);
    }
}
