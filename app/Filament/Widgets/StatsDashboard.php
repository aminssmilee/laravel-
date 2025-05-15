<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countusers = \App\Models\Pengguna::count();
        $stokobat = \App\Models\Obat::count();
        return [
            Stat::make('Jumlah Users', $countusers),
            Stat::make('Stok Obat', $stokobat),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
