<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SinlimitesResource\Pages;
use App\Filament\Resources\SinlimitesResource\RelationManagers;
use App\Models\Sinlimites;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SinlimitesResource extends Resource
{
    protected static ?string $model = Sinlimites::class;

    protected static ?string $navigationGroup = 'Lineas';

    protected static ?string $navigationLabel = 'Sin Limites';

    protected static ?string $navigationIcon = 'heroicon-o-globe';

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
            'index' => Pages\ListSinlimites::route('/'),
            'create' => Pages\CreateSinlimites::route('/create'),
            'edit' => Pages\EditSinlimites::route('/{record}/edit'),
        ];
    }    
}
