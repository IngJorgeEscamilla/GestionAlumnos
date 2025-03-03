<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\maestro;
use App\Models\alumno;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //maestro::factory(count:10)->create();

        User::factory()->create([
            'name' => 'soporte',
            'email' => 'soporte@admin.com',
            'password' => 'admin1234'
        ]);

        //alumno::factory()->create([
        //    'nombre' => 'jorge',
        //    'apellido' => 'escamilla',
        //    'matricula' => '18070030',
        //    'semestre' => 'noveno',
        //    'email' => 'jorge@test.com',
        //    'telefono' => '9991100888',
        //]);
        //alumno::factory()->create([
        //    'nombre' => 'ricardo',
        //    'apellido' => 'martinez',
        //    'matricula' => '16090058',
        //    'semestre' => 'septimo',
        //    'email' => 'ricardo@test.com',
        //    'telefono' => '9995033188',
        //]);
    }
}
