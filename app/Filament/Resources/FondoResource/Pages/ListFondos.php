<?php

namespace App\Filament\Resources\FondoResource\Pages;

use App\Filament\Resources\FondoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFondos extends ListRecords
{
    //protected function getTitle(): string
    //{
        //return 'Editar Línea Sin Limites';
    //}

    protected static string $resource = FondoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
