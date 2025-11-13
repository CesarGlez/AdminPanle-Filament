<?php

namespace App\Filament\Resources\Attributes\Tables;


use Filament\Tables\Columns\Layout\View;
use Filament\Tables\Table;


class AttributesTable
{
   public static function configure(Table $table): Table
   {
      return $table
         ->contentGrid([
            'md' => 3,
            'xl' => 4,
         ])
         ->columns([
            View::make('filament.tables.columns.attribute-card')
         ]);
   }
}
