<?php

namespace App\Filament\Resources\DespegueResource\Pages;

use App\Filament\Resources\DespegueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDespegues extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Línea Despegue';
    }

    protected static string $resource = DespegueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
