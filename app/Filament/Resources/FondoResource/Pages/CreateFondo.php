<?php

namespace App\Filament\Resources\FondoResource\Pages;

use App\Filament\Resources\FondoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFondo extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Fondo';
    }

    protected static string $resource = FondoResource::class;
}
