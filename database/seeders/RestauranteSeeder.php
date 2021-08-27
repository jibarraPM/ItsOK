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
            'nombre' => 'Top Pizza',
            'rut' => '76.974.486-K',
            'razonSocial' => 'Grupo Andes SPA',
            'giro' => 'SN',
            'correo' => 'toppizzacurico@gmail.com',
            'descripcion' => 'Local especializado en la venta de pizzas',
            'direccion' => 'Manuel Montt 410',
            'horarioAtencion' => '12:00 - 23:00',
            'ubicacionGps' => '-34.98246748153115, -71.24058125815952',
            'logo' => 'logo',
            'entidadFinanciera' => 'Banco Santander',
            'tipoCuenta' => 'Cuenta Corriente',
            'numeroCuenta' => 'SN'
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
