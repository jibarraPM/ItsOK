<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoAtencion;

class TipoAtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAtencion::create([
            'nombre' => 'Delivery'
        ]);
        TipoAtencion::create([
            'nombre' => 'Retiro'
        ]);
        TipoAtencion::create([
            'nombre' => 'Local'
        ]);
    }
}
