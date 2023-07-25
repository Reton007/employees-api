<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Position;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Position::create([
            'name' => 'Рядовой',
            'slug' => 'average',
        ]);

        Position::create([
            'name' => 'Инженер',
            'slug' => 'engineer',
        ]);
    }
}
