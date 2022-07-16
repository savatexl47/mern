<?php

namespace App\Filament\Resources\SinlimitesResource\Pages;

use App\Filament\Resources\SinlimitesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSinlimites extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Línea Sin Limites';
    }

    protected static string $resource = SinlimitesResource::class;
}
