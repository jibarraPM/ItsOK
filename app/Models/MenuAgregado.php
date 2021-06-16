<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuAgregado extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idMenu',
        'idAgregado',
    ];

    public function getMenu()
    {
        return $this->belongsTo(Menu::class, 'idMenu');
    }

    public function getAgregado()
    {
        return $this->belongsTo(Agregado::class, 'idAgregado');
    }
}
