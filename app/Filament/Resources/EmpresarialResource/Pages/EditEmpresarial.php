<?php

namespace App\Filament\Resources\EmpresarialResource\Pages;

use App\Filament\Resources\EmpresarialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmpresarial extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Línea Empresarial';
    }

    protected static string $resource = EmpresarialResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
