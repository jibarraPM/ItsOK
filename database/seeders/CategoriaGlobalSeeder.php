<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoriaGlobal;

class CategoriaGlobalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CategoriaGlobal::create([
            'descripcion' => 'Hamburguesas'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Sushi'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Chilena'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Comida rápida'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Pizza'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Mexicana'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Vegetariana'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Italiana'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Dulces'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Chocolates'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Panaderías'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Helado'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'China'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Peruana'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Americana'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Sándwiches'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Asiática'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'India'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Árabe'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Saludable'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Alcohol'
        ]);
        CategoriaGlobal::create([
            'descripcion' => 'Almacenes'
        ]);
    }
}
