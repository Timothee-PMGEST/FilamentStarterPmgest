<?php
namespace Timothee\FilamentStarter\Filament;

use Filament\Panel;

class PanelConfiguation
{
    public static function configure(Panel $panel): void
    {
        $panel
            ->viteTheme('vendor/filamentstarter/css/theme.css')
            ->id('app')
            ->darkMode(false)
            ->spa()
            ->colors([
                'primary' => Color::Blue,
            ]);

    }
}