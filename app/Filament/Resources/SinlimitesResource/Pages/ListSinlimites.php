<?php

namespace App\Filament\Resources\SinlimitesResource\Pages;

use App\Filament\Resources\SinlimitesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSinlimites extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Línea Sin Limites';
    }

    protected static string $resource = SinlimitesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
