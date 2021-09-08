<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'ingredientes',
        'precio',
        'tiempoElavoracion',
        'disponible',
        'edad18',
        'idRestaurante',
        'buy_order'
    ];

    public function getRestaurante()
    {
        return $this->belongsTo(Restaurante::class, 'idRestaurante');
    }

    public function getBuy_order()
    {
        return $this->belongsTo(Compra::class, 'buy_order');
    }
}
