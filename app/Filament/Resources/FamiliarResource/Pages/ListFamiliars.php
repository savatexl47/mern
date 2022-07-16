<?php

namespace App\Filament\Resources\FamiliarResource\Pages;

use App\Filament\Resources\FamiliarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFamiliars extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Línea Familiar';
    }

    protected static string $resource = FamiliarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
