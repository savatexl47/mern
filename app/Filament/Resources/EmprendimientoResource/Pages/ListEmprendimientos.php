<?php

namespace App\Filament\Resources\EmprendimientoResource\Pages;

use App\Filament\Resources\EmprendimientoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmprendimientos extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Línea Emprendimiento';
    }

    protected static string $resource = EmprendimientoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
