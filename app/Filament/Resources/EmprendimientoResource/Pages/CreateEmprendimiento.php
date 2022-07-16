<?php

namespace App\Filament\Resources\EmprendimientoResource\Pages;

use App\Filament\Resources\EmprendimientoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmprendimiento extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Línea Emprendimiento';
    }

    protected static string $resource = EmprendimientoResource::class;
}
