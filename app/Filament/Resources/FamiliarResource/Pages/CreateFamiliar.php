<?php

namespace App\Filament\Resources\FamiliarResource\Pages;

use App\Filament\Resources\FamiliarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFamiliar extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Línea Familiar';
    }

    protected static string $resource = FamiliarResource::class;
}
