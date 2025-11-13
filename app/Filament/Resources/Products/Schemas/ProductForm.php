<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre')
                    ->required(),
                Select::make('category_id')
                    ->label('Categoría')
                    ->relationship('category', 'name')
                    ->required(),
                Textarea::make('decription')
                    ->label('Descripción')
                    ->required()
            ]);
    }
}
