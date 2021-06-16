<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestauranteRestauranteImagen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idRestaurante',
        'idRestauranteImagen',
    ];

    public function getRestaurante()
    {
        return $this->belongsTo(Restaurante::class, 'idRestaurante');
    }

    public function getRestauranteImagen()
    {
        return $this->belongsTo(RestauranteImagen::class, 'idRestauranteImagen');
    }
}
