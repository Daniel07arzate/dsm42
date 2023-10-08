<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }
}

class Direccion extends Model
{
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}

class Direccion extends Model
{
    use HasFactory;
}
