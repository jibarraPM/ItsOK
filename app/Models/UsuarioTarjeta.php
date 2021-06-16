<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioTarjeta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUsuario',
        'idMedioPago',
    ];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

    public function getMedioPago()
    {
        return $this->belongsTo(MedioPago::class, 'idMedioPago');
    }
}
