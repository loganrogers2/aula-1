<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Corte Masculino',
                'description' => 'Cortes modernos ou tradicionais, adequados ao seu estilo. Inclui lavagem e finalização.',
                'price' => 35.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barba',
                'description' => 'Modelagem completa com toalha quente, óleo de barba e finalização perfeita.',
                'price' => 25.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Combo Completo',
                'description' => 'Corte + barba com tratamento completo. Inclui massagem relaxante.',
                'price' => 55.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hidratação Capilar',
                'description' => 'Tratamento profundo com produtos premium para revitalizar seus cabelos.',
                'price' => 45.00,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('services')->insert($services);
    }
}