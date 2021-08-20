<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategoriaGlobal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idMenu',
        'idCategoriaGlobal',
    ];

    public function getMenu()
    {
        return $this->belongsTo(Menu::class, 'idMenu');
    }

    public function getCategoriaGlobal()
    {
        return $this->belongsTo(CategoriaGlobal::class, 'idCategoriaGlobal');
    }
}
