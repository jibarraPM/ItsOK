<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoAtencion;

class EstadoAtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoAtencion::create([
            'nombre' => 'Nuevo'
        ]);
        EstadoAtencion::create([
            'nombre' => 'Completado'
        ]);
        EstadoAtencion::create([
            'nombre' => 'Cancelado'
        ]);
        EstadoAtencion::create([
            'nombre' => 'Enviado'
        ]);
        EstadoAtencion::create([
            'nombre' => 'Pendiente'
        ]);
    }
}
