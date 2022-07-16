<?php

namespace App\Filament\Resources\EmprendimientoResource\Pages;

use App\Filament\Resources\EmprendimientoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmprendimiento extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Línea Emprendimiento';
    }

    protected static string $resource = EmprendimientoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
