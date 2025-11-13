<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Cerrajes', 'active' => true],
            ['name' => 'Tornillería', 'active' => true],
            ['name' => 'Herramientas', 'active' => true],
            ['name' => 'Pinturas', 'active' => false],
            ['name' => 'Iluminación', 'active' => true],
        ];

        foreach ($categories as $data) {
            Category::factory()->create($data);
        }
    }
}
