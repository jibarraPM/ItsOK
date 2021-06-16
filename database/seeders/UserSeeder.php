<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sebastian Ibarra',
            'email' => 'xebaelvemgador@gmail.com',
            'password' => bcrypt('Sterek64'),
            'role' => 1,
            'apellido' => 'Ibarra',
            'telefono' => '+5699404978 9',
            'apodo' => 'SrDeLorean',
            'nacimiento' => '1996-09-06',
            'imagen' => 'hola'
        ]);

        User::create([
            'name' => 'Javier Ibarra',
            'email' => 'jibarra@proyectomapache.com',
            'password' => bcrypt('Sterek64'),
            'role' => 1,
            'apellido' => 'Ibarra',
            'telefono' => '+56994049789',
            'apodo' => 'JavierInuzuka',
            'nacimiento' => '1992-07-08',
            'imagen' => 'hola'
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'gerente@proyectomapache.com',
            'password' => bcrypt('Sterek64'),
            'role' => 2,
            'apellido' => 'Administrador',
            'telefono' => '+56994049789',
            'apodo' => 'gerente',
            'nacimiento' => '1996-09-06',
            'imagen' => 'hola'
        ]);

        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@proyectomapache.com',
            'password' => bcrypt('Sterek64'),
            'role' => 3,
            'apellido' => 'Usuario',
            'telefono' => '+56994049789',
            'apodo' => 'usuario',
            'nacimiento' => '1996-09-06',
            'imagen' => 'hola'
        ]);
    }
}
