<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class CreateUser extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected function getTitle(): string
    {
        return 'Crear Usuarios';
    }

    protected static string $resource = UserResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Cuenta')
                ->description('Datos de la Cuenta')
                ->schema([
                    FileUpload::make('imagen')->avatar()->image()->columnspan(span: 'full')->placeholder('Imagen'),
                    TextInput::make('email')
                        ->required(),
                    TextInput::make('password')
                        ->required(),
                    Select::make('estado')
                    ->options([
                        'activo' => 'Activo',
                        'inactivo' => 'Inactivo',
                    ]),
                ]),
            Step::make('Personal')
                ->description('Información Personal')
                ->schema([
                    TextInput::make('nombre'),
                    TextInput::make('apellido'),
                    TextInput::make('direccion'),
                    Select::make('tipo')
                    ->options([
                        'consagrado' => 'Consagrado',
                        'miembro' => 'Miembro',
                    ]),
                    TextInput::make('dni'),
                    Select::make('sexo')
                    ->options([
                        'femenino' => 'Femenino',
                        'masculino' => 'Masculino',
                    ]),
                    TextInput::make('edad'),
                    TextInput::make('movil'),
                    DatePicker::make('fecha_nacimiento')->format('Y-m-d')->displayFormat('d/m/Y'),
                ]),
            Step::make('Validación')
                ->description('Datos a Validar')
                ->schema([
                    TextArea::make('sueño')->maxLength(80),
                    FileUpload::make('voucher')->avatar()->image()->placeholder('Voucher'),
                    FileUpload::make('declaju')->avatar()->image()->placeholder('Declaración Jurada'),
                    FileUpload::make('foto_dni')->avatar()->image()->placeholder('Foto de DNI'),
                ]),
            Step::make('Detalles')
                ->description('Datos Confirmados')
                ->schema([
                    TextInput::make('nro_cuenta'),
                    TextInput::make('banco'),
                    TextInput::make('cci'),
                    DatePicker::make('fecha_voucher')->format('Y-m-d')->displayFormat('d/m/Y'),
                ]),
        ];
    }
}
