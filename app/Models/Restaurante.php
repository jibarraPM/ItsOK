<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'rut',
        'razonSocial',
        'giro',
        'correo',
        'descripcion',
        'direccion',
        'horarioAtencion',
        'ubicacionGps',
        'logo',
        'entidadFinanciera',
        'tipoCuenta',
        'numeroCuenta',
    ];
}
