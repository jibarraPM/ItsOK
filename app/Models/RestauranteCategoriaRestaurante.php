<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestauranteCategoriaRestaurante extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idMenu',
        'idCategoria',
    ];

    public function getMenu()
    {
        return $this->belongsTo(Menu::class, 'idRestaurante');
    }

    public function getCategoria()
    {
        return $this->belongsTo(CategoriaRestaurantes::class, 'idCategoriaRestaurante');
    }
}
