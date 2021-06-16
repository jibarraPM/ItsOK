<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestauranteMesa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idRestaurante',
        'idMesa',
    ];

    public function getRestaurante()
    {
        return $this->belongsTo(Restaurante::class, 'idRestaurante');
    }

    public function getMesa()
    {
        return $this->belongsTo(Mesa::class, 'idMesa');
    }
}
