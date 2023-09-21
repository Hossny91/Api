<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ["product","Price","description","Stock"];
    use HasFactory;
    public function categoria(): HasOne
    {
        return $this->hasOne(categoria::class);
    }
    public function venta(): HasOne
    {
        return $this->hasOne(venta::class);
    }
    public function usuarios(): HasOne
    {
        return $this->hasOne(usuario::class);
    }
}
