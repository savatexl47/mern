<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Usuarios';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //Forms\Components\TextInput::make('imagen')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('password')->required(),
                Forms\Components\TextInput::make('estado')->required(),
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('apellido')->required(),
                Forms\Components\TextInput::make('direccion')->required(),
                Forms\Components\TextInput::make('tipo')->required(),
                Forms\Components\TextInput::make('dni')->required(),
                Forms\Components\TextInput::make('sexo')->required(),
                Forms\Components\TextInput::make('edad')->required(),
                Forms\Components\TextInput::make('movil')->required(),
                Forms\Components\TextInput::make('fecha_nacimiento')->required(),
                Forms\Components\TextInput::make('nro_cuenta')->required(),
                Forms\Components\TextInput::make('banco')->required(),
                Forms\Components\TextInput::make('cci')->required(),
                Forms\Components\TextInput::make('fecha_voucher'),
                Forms\Components\TextInput::make('sueño')->required(),
                //Forms\Components\TextInput::make('voucher')->required(),
                //Forms\Components\TextInput::make('declaju')->required(),
                //Forms\Components\TextInput::make('foto_dni')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')->rounded(),
                Tables\Columns\TextColumn::make('email'),
                //Tables\Columns\TextColumn::make('password'),
                Tables\Columns\TextColumn::make('estado'),
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('apellido'),
                Tables\Columns\TextColumn::make('direccion'),
                Tables\Columns\TextColumn::make('tipo'),
                //Tables\Columns\TextColumn::make('dni'),
                //Tables\Columns\TextColumn::make('sexo'),
                //Tables\Columns\TextColumn::make('edad'),
                //Tables\Columns\TextColumn::make('movil'),
                //Tables\Columns\TextColumn::make('fecha_nacimiento'),
                //Tables\Columns\TextColumn::make('nro_cuenta'),
               // Tables\Columns\TextColumn::make('banco'),
                //Tables\Columns\TextColumn::make('cci'),
                //Tables\Columns\TextColumn::make('fecha_voucher'),
                //Tables\Columns\TextColumn::make('sueño'),
                //Tables\Columns\TextColumn::make('voucher'),
                //Tables\Columns\TextColumn::make('declaju'),
                //Tables\Columns\TextColumn::make('foto_dni'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
