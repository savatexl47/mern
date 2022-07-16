<?php

namespace App\Filament\Resources\SinlimitesResource\Pages;

use App\Filament\Resources\SinlimitesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSinlimites extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Línea Sin Limites';
    }

    protected static string $resource = SinlimitesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
