<?php

namespace App\Filament\Resources\DespegueResource\Pages;

use App\Filament\Resources\DespegueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDespegue extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Línea Despegue';
    }

    protected static string $resource = DespegueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
