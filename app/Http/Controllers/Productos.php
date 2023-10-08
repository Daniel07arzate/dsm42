<?php

namespace App\Http\Controllers;

use App\Models\dsm42;
use Illuminate\Http\Request;

class Productos extends Controller
{
    public function index()
{
    
    return view('productos.index');
}
}