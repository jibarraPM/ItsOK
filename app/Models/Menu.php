<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
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
        'idElaboracion',
        'edad18',
    ];

    public function getElaboracion()
    {
        return $this->belongsTo(Elaboracion::class, 'idElaboracion');
    }
}
