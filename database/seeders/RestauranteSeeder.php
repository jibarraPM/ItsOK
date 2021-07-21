<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurante;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurante::create([
            'nombre' => 'test 1',
            'rut' => '11.111.111-1',
            'razonSocial' => 'razonSocial',
            'giro' => 'giro',
            'correo' => 'test1@gmail.com',
            'descripcion' => 'descripcion',
            'direccion' => 'direccion',
            'horarioAtencion' => 'horarioAtencion',
            'ubicacionGps' => 'ubicacionGps',
            'logo' => 'logo',
            'entidadFinanciera' => 'entidadFinanciera',
            'tipoCuenta' => 'tipoCuenta',
            'numeroCuenta' => 'numeroCuenta'
        ]);

        Restaurante::create([
            'nombre' => 'test 2',
            'rut' => '22.222.222-2',
            'razonSocial' => 'razonSocial',
            'giro' => 'giro',
            'correo' => 'test2@gmail.com',
            'descripcion' => 'descripcion',
            'direccion' => 'direccion',
            'horarioAtencion' => 'horarioAtencion',
            'ubicacionGps' => 'ubicacionGps',
            'logo' => 'logo',
            'entidadFinanciera' => 'entidadFinanciera',
            'tipoCuenta' => 'tipoCuenta',
            'numeroCuenta' => 'numeroCuenta'
        ]);

        Restaurante::create([
            'nombre' => 'test 3',
            'rut' => '33.333.333-3',
            'razonSocial' => 'razonSocial',
            'giro' => 'giro',
            'correo' => 'test3@gmail.com',
            'descripcion' => 'descripcion',
            'direccion' => 'direccion',
            'horarioAtencion' => 'horarioAtencion',
            'ubicacionGps' => 'ubicacionGps',
            'logo' => 'logo',
            'entidadFinanciera' => 'entidadFinanciera',
            'tipoCuenta' => 'tipoCuenta',
            'numeroCuenta' => 'numeroCuenta'
        ]);
    }
}
