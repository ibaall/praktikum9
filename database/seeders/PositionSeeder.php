<?php

namespace Database\Seeders;

use App\Models\Position; // Pastikan ini diimpor
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 5 data dummy menggunakan factory
        Position::factory()->count(5)->create();

        // Insert beberapa data tetap
        Position::insert([
            [
                'code' => 'FE',
                'name' => 'Front End Developer',
                'description' => 'Front End Developer',
            ],
            [
                'code' => 'BE',
                'name' => 'Back End Developer',
                'description' => 'Back End Developer',
            ],
            [
                'code' => 'SA',
                'name' => 'System Analyst',
                'description' => 'System Analyst',
            ],
        ]);
    }
}
