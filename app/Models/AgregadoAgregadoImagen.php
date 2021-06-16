<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgregadoAgregadoImagen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idAgregado',
        'idAgregadoImagen',
    ];

    public function getAgregado()
    {
        return $this->belongsTo(Agregado::class, 'idAgregado');
    }

    public function getAgregadoImagen()
    {
        return $this->belongsTo(AgregadoImagen::class, 'idAgregadoImagen');
    }
}
