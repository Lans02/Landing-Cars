<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $now = Carbon::now()->toDateTimeString();

        $departamentos = [
            ['id' => 1, 'nombre' => 'Antioquia', 'codigo' => 5 ,'created_at' => $now, 'updated_at' => $now ],
            ['id' => 2, 'nombre' => 'Atlantico', 'codigo' => 8 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'nombre' => 'D. C. Santa Fe de Bogotá', 'codigo' => 11 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'nombre' => 'Bolivar', 'codigo' => 13 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'nombre' => 'Boyaca', 'codigo' => 15 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'nombre' => 'Caldas', 'codigo' => 17 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 7, 'nombre' => 'Caqueta', 'codigo' => 18 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 8, 'nombre' => 'Cauca', 'codigo' => 19 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 9, 'nombre' => 'Cesar', 'codigo' => 20 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 10, 'nombre' => 'Cordova', 'codigo' => 23 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 11, 'nombre' => 'Cundinamarca', 'codigo' => 25 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 12, 'nombre' => 'Choco', 'codigo' => 27 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 13, 'nombre' => 'Huila', 'codigo' => 41 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 14, 'nombre' => 'La Guajira', 'codigo' => 44 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 15, 'nombre' => 'Magdalena', 'codigo' => 47 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 16, 'nombre' => 'Meta', 'codigo' => 50 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 17, 'nombre' => 'Nariño', 'codigo' => 52 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 18, 'nombre' => 'Norte de Santander', 'codigo' => 54 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 19, 'nombre' => 'Quindio', 'codigo' => 63 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 20, 'nombre' => 'Risaralda', 'codigo' => 66 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 21, 'nombre' => 'Santander', 'codigo' => 68 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 22, 'nombre' => 'Sucre', 'codigo' => 70 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 23, 'nombre' => 'Tolima', 'codigo' => 73 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 24, 'nombre' => 'Valle', 'codigo' => 76 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 25, 'nombre' => 'Arauca', 'codigo' => 81 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 26, 'nombre' => 'Casanare', 'codigo' => 85 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 27, 'nombre' => 'Putumayo', 'codigo' => 86 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 28, 'nombre' => 'San Andres', 'codigo' => 88 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 29, 'nombre' => 'Amazonas', 'codigo' => 91 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 30, 'nombre' => 'Guainia', 'codigo' => 94 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 31, 'nombre' => 'Guaviare', 'codigo' => 95 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 32, 'nombre' => 'Vaupes', 'codigo' => 97 ,'created_at' => $now, 'updated_at' => $now],
            ['id' => 33, 'nombre' => 'Vichada', 'codigo' => 99 ,'created_at' => $now, 'updated_at' => $now],
        ];

        // Insertar los datos en la tabla 'departamentos'
        DB::table('departamentos')->insert($departamentos);
    }
}
