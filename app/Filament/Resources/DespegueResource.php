<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DespegueResource\Pages;
use App\Filament\Resources\DespegueResource\RelationManagers;
use App\Models\Despegue;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DespegueResource extends Resource
{
    protected static ?string $model = Despegue::class;

    protected static ?string $navigationGroup = 'Lineas';

    protected static ?string $navigationLabel = 'Despegue';

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
            'index' => Pages\ListDespegues::route('/'),
            'create' => Pages\CreateDespegue::route('/create'),
            'edit' => Pages\EditDespegue::route('/{record}/edit'),
        ];
    }    
}
