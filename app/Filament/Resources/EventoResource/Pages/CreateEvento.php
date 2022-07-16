<?php

namespace App\Filament\Resources\EventoResource\Pages;

use App\Filament\Resources\EventoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEvento extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Evento';
    }

    protected static string $resource = EventoResource::class;
}
