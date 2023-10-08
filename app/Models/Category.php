<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function productos()
    {
        return $this->hasMany(Productos::class);
    }
}    

class Category extends Model
{
    use HasFactory;
}
