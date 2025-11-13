<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      $attributeValues = [
         // Peso
         ['attribute_id' => 1, 'value' => 'mg'],
         ['attribute_id' => 1, 'value' => 'gr'],
         ['attribute_id' => 1, 'value' => 'kg'],

         // Longitud
         ['attribute_id' => 2, 'value' => 'mm'],
         ['attribute_id' => 2, 'value' => 'cm'],
         ['attribute_id' => 2, 'value' => 'm'],
         ['attribute_id' => 2, 'value' => 'km'],

         // Capacidad
         ['attribute_id' => 3, 'value' => 'mL'],
         ['attribute_id' => 3, 'value' => 'L'],

         // Dimensiones
         ['attribute_id' => 4, 'value' => 'Largo'],
         ['attribute_id' => 4, 'value' => 'Ancho'],
         ['attribute_id' => 4, 'value' => 'Fondo'],

         // Potencia
         ['attribute_id' => 6, 'value' => 'W'],
      ];


      foreach ($attributeValues as $data) {
         AttributeValue::factory()->create($data);
      }
   }
}
