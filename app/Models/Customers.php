<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function direccion()
    {
        return $this->hasOne(Direccion::class);
    }
}

class Customers extends Model
{
    public function productos()
    {
        return $this->belongsToMany(Productos::class, 'customers_productos')->withPivot('cantidad');
    }
}

class Customers extends Model
{
    use HasFactory;
}
