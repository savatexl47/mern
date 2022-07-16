<?php

namespace App\Filament\Resources\WawaResource\Pages;

use App\Filament\Resources\WawaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWawa extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Línea Wawa';
    }

    protected static string $resource = WawaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
