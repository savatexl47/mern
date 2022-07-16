<?php

namespace App\Filament\Widgets;

use App\Models\Despegue;
use App\Models\Emprendimiento;
use App\Models\Empresarial;
use App\Models\Familiar;
use App\Models\Sinlimites;
use App\Models\Wawa;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    //protected static ?string $pollingInterval = '10s';

    protected function getCards(): array
    {
        return [
            Card::make('Línea Despegue', Despegue::query()->count())
            ->description('Usuarios')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success')
            ->extraAttributes([
               'background-color' => 'success',
            ]),           
            Card::make('Línea Emprendimiento', Emprendimiento::query()->count())
            ->description('Usuarios')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
            Card::make('Línea Empresarial', Empresarial::query()->count())
            ->description('Usuarios')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
            Card::make('Línea Familiar', Familiar::query()->count())
            ->description('Usuarios')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
            Card::make('Línea Sin Limites', Sinlimites::query()->count())
            ->description('Usuarios')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
            Card::make('Línea Wawa', Wawa::query()->count())
            ->description('Usuarios')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
        ];
    }
}
