<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuMenuImagen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idMenu',
        'idMenuImagen',
    ];

    public function getMenu()
    {
        return $this->belongsTo(Menu::class, 'idMenu');
    }

    public function getMenuImagen()
    {
        return $this->belongsTo(MenuImagen::class, 'idMenuImagen');
    }
}
