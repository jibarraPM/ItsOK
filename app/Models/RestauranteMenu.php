<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestauranteMenu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idMenu',
        'idRestaurante',
    ];

    public function getMenu()
    {
        return $this->belongsTo(Menu::class, 'idMenu');
    }

    public function getRestaurante()
    {
        return $this->belongsTo(Restaurante::class, 'idRestaurante');
    }
}
