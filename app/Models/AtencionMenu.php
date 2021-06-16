<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtencionMenu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idAtencion',
        'idMenu',
        'nota',
        'cantidad',
        'valor',
        'total',
    ];

    /**
     * esto tiene que hacer referencia a la tabla intermedia, no la final, son id diferentes
     */
    public function getAtencion()
    {
        return $this->belongsTo(Atencion::class, 'idAtencion');
    }  

    /**
     * esto tiene que hacer referencia a la tabla intermedia, no la final, son id diferentes
     */
    public function getMenu()
    {
        return $this->belongsTo(Menu::class, 'idMenu');
    } 

}
