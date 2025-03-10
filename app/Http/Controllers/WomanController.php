<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class WomanController extends Controller
{
    public function index()
    {
        // Obtener todos los productos de la categoría "Mujer"
        $productos = Producto::where('genero', 'Mujer')->get();

        // Pasar los productos a la vista
        return view('woman', compact('productos'));
    }
}
