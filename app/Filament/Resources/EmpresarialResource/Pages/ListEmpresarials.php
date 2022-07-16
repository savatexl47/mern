<?php

namespace App\Filament\Resources\EmpresarialResource\Pages;

use App\Filament\Resources\EmpresarialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmpresarials extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Línea Empresarial';
    }

    protected static string $resource = EmpresarialResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
