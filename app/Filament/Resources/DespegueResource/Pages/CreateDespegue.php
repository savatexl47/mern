<?php

namespace App\Filament\Resources\DespegueResource\Pages;

use App\Filament\Resources\DespegueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDespegue extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Línea Despegue';
    }

    protected static string $resource = DespegueResource::class;
}
