<?php

namespace App\Filament\Resources\FamiliarResource\Pages;

use App\Filament\Resources\FamiliarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFamiliar extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Línea Familiar';
    }

    protected static string $resource = FamiliarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
