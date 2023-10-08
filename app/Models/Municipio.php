<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function direccion()
    {
        return $this->hasMany(Direccion::class);
    }
}


class Municipio extends Model
{
    use HasFactory;
}
