<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FondoResource\Pages;
use App\Filament\Resources\FondoResource\RelationManagers;
use App\Models\Fondo;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FondoResource extends Resource
{
    protected static ?string $model = Fondo::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFondos::route('/'),
            'create' => Pages\CreateFondo::route('/create'),
            'edit' => Pages\EditFondo::route('/{record}/edit'),
        ];
    }    
}
