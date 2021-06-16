<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idConsumidor',
        'idMecero',
        'idRestaurante',
        'idMesa',
        'valorAtencion',
        'valoracionAtencion',
    ];

    public function getConsumidor()
    {
        return $this->belongsTo(Consumidor::class, 'idConsumidor');
    }

    public function getMecero()
    {
        return $this->belongsTo(Mecero::class, 'idMecero');
    }

    public function getRestaurante()
    {
        return $this->belongsTo(Restaurante::class, 'idRestaurante');
    }

    public function getMesa()
    {
        return $this->belongsTo(Mesa::class, 'idMesa');
    }
}
