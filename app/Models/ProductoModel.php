<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'idProducto';
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'expiracion',
        'stock'
    ];

}
