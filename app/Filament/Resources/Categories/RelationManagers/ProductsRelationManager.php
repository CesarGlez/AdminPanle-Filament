<?php

namespace App\Filament\Resources\Categories\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsRelationManager extends RelationManager
{
   protected static string $relationship = 'products';

   public function form(Schema $schema): Schema
   {
      return $schema
         ->components([
            TextInput::make('name')
               ->label('Nombre')
               ->required(),
            TextInput::make('description')
               ->label('Descripción')
               ->required()
         ]);
   }

   public function table(Table $table): Table
   {
      return $table
         ->columns([
            TextColumn::make('name')->label('Nombre')->searchable(),
            TextColumn::make('description')->label('Descripción')->sortable(),
            TextColumn::make('created_at')->label('Creado')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')->label('Actualizado')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
         ])
         ->filters([
            //
         ])
         ->headerActions([
            CreateAction::make(),
            AssociateAction::make(),
         ])
         ->recordActions([
            EditAction::make(),
            DissociateAction::make(),
            DeleteAction::make(),
         ])
         ->toolbarActions([
            BulkActionGroup::make([
               DissociateBulkAction::make(),
               DeleteBulkAction::make(),
            ]),
         ]);
   }
}
