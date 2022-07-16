<?php

namespace App\Filament\Resources\WawaResource\Pages;

use App\Filament\Resources\WawaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWawa extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Línea Wawa';
    }

    protected static string $resource = WawaResource::class;
}
