<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuIngrediente extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idMenu',
        'idIngrediente',
    ];

    public function getMenu()
    {
        return $this->belongsTo(Menu::class, 'idMenu');
    }

    public function getIngrediente()
    {
        return $this->belongsTo(Ingrediente::class, 'idIngrediente');
    }
}
