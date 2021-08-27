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
            'nacimiento' => '1996-09-06'
        ]);

        User::create([
            'name' => 'Javier Ibarra',
            'email' => 'jibarra@proyectomapache.cl',
            'password' => bcrypt('Sterek64'),
            'role' => 1,
            'apellido' => 'Ibarra',
            'telefono' => '+56994049789',
            'nacimiento' => '1992-07-08'
        ]);
        User::create([
            'name' => 'Benjamin Obrador',
            'email' => 'bobrador@proyectomapache.cl',
            'password' => bcrypt('Sterek64'),
            'role' => 1,
            'apellido' => 'Obrador',
            'telefono' => '+56994049789',
            'nacimiento' => '1992-07-08'
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@proyectomapache.cl',
            'password' => bcrypt('Sterek64'),
            'role' => 2,
            'apellido' => 'Administrador',
            'telefono' => '+56994049789',
            'nacimiento' => '1996-09-06'
        ]);

        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@proyectomapache.cl',
            'password' => bcrypt('Sterek64'),
            'role' => 3,
            'apellido' => 'Usuario',
            'telefono' => '+56994049789',
            'nacimiento' => '1996-09-06'
        ]);
    }
}
