<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      $attributes = [
         ['key' => 'Peso' ],
         ['key' => 'Longitud' ],
         ['key' => 'Capacidad' ],
         ['key' => 'Dimensiones' ],
         ['key' => 'Color' ],
         ['key' => 'Potencia' ],
      ];

      foreach ($attributes as $data) {
         Attribute::factory()->create($data);
      }
   }
}
