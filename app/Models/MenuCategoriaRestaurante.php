<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategoriaRestaurante extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idRestaurante',
        'idCategoriaRestaurante',
    ];

    public function getRestaurante()
    {
        return $this->belongsTo(Restaurante::class, 'idRestaurante');
    }

    public function getCategoriaRestaurante()
    {
        return $this->belongsTo(CategoriaRestaurante::class, 'idCategoriaRestaurante');
    }
}
}
