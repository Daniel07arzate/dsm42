<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sales extends Model
{
    public function productos()
    {
        return $this->belongsToMany(Productos::class, 'sales_productos')->withPivot('cantidad');
    }
}

class Sales extends Model
{
    use HasFactory;
}
