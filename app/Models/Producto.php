<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'producto'; // Asegúrate de que 'producto' es el nombre correcto de tu tabla

    // Clave primaria
    protected $primaryKey = 'id_producto';

    // Campos que se pueden llenar masivamente (mass assignment)
    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria',
        'talla',
        'color',
        'precio',
        'stock',
        'imagen',
        'genero',
        'numero',
    ];
}
