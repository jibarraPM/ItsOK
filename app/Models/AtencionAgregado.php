<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtencionAgregado extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idAtencion',
        'idAgregado',
        'cantidad',
        'valor',
        'total',
    ];

    public function getAtencion()
    {
        return $this->belongsTo(Atencion::class, 'idAtencion');
    }

    public function getAgregado()
    {
        return $this->belongsTo(Agregado::class, 'idAgregado');
    }
}
