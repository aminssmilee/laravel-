<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Page;
use App\Filament\Widgets\StatsDashboard;
use App\Filament\Widgets\BlogPostsChart;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    public function getWidgets(): array
    {
        return [
            \App\Filament\Widgets\BlogPostsChart::class, 
            \App\Filament\Widgets\StatsDashboard::class,   // Urutan pertama
        ];
    }
}
