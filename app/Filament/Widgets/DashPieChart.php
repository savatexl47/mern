<?php

namespace App\Filament\Widgets;

use Filament\Widgets\PieChartWidget;

class DashPieChart extends PieChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
           // data = {
               // datasets: [{
                   // data: [10, 20, 30]
                //}],

        // These labels appear in the legend and in the tooltips when hovering different arcs
               // labels: [
              //  'Red',
               // 'Yellow',
               // 'Blue'
              //  ]
           // };

        ];
    }
}
