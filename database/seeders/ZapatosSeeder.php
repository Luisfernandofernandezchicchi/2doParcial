<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ZapatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Marca' => "Nike", 'Modelo' => "Air Max", 'Tamaño' => 42, 'Tipo' => "Deportivo"],
        ];

        DB::table('zapatos')->insert($data);
    }
}
