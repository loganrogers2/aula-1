<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $professionals = [
            [
                'name' => 'João Silva',
                'role' => 'Barbeiro Master',
                'bio' => 'Especialista em cortes clássicos e modernos, com mais de 10 anos de experiência.',
                'photo_url' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Maria Santos',
                'role' => 'Especialista em Barba',
                'bio' => 'Expert em barbas estilizadas e tratamentos capilares masculinos.',
                'photo_url' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pedro Oliveira',
                'role' => 'Colorista',
                'bio' => 'Especializado em coloração e tratamentos modernos para cabelo.',
                'photo_url' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ana Costa',
                'role' => 'Designer de Cortes',
                'bio' => 'Especialista em cortes modernos e tendências atuais.',
                'photo_url' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('professionals')->insert($professionals);
    }
}