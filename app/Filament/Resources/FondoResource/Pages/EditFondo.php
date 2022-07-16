<?php

namespace App\Filament\Resources\FondoResource\Pages;

use App\Filament\Resources\FondoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFondo extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Fondo';
    }

    protected static string $resource = FondoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
