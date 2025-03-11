<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ManController extends Controller
{
    public function index()
    {
        // Obtener todos los productos de la categoría "Mujer"
        $productos = Producto::where('genero', 'Hombre')->get();

        // Pasar los productos a la vista
        return view('man', compact('productos'));
    }
}
