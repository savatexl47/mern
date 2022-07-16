<?php

namespace App\Filament\Resources\EmpresarialResource\Pages;

use App\Filament\Resources\EmpresarialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmpresarial extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Línea Empresarial';
    }

    protected static string $resource = EmpresarialResource::class;
}
