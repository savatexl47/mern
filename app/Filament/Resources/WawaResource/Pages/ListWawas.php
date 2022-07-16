<?php

namespace App\Filament\Resources\WawaResource\Pages;

use App\Filament\Resources\WawaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWawas extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Línea Wawa';
    }

    protected static string $resource = WawaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
