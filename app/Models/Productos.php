<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Productos extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

class Productos extends Model
{
    public function sales()
    {
        return $this->belongsToMany(Sales::class, 'sales_productos')->withPivot('cantidad');
    }
}

class Productos extends Model
{
    public function suppliers()
    {
        return $this->belongsToMany(Suppliers::class, 'suppliers_productos')->withPivot('cantidad');
    }
}

class Productos extends Model
{
    public function customers()
    {
        return $this->belongsToMany(Customers::class, 'customers_productos')->withPivot('cantidad');
    }
}



class Productos extends Model
{
    use HasFactory;


    // esto es la variable que hace referencia a una tabla 
    //protected $table = 'moodle_product';

    //esta es la varible que indica la llave primaria 
    //protected $primarykey = 'id';

    //hace referencia a created_at y update_at
    //public $timecamp =true;

    //especificaciones de las columnas dentro de la table 
    //protected $fillable = ['name', 'description', 'price', 'stock'];

    //oculta columnas del modelo 
    //protected $hidden = ['created_at', 'update_at'];
}
