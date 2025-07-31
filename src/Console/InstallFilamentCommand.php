<?php

namespace TimotheMillot\FilamentPmgest\Console;

use Illuminate\Console\Command;
class InstallFilamentCommand extends Command
{
    protected $signature = 'filamentstarter:install';
    protected $description = 'Installe Filament et publie les assets nécessaires';

    public function handle()
    {
        $this->call('filament:install');
        $this->call('vendor:publish', ['--tag' => 'filament-assets']);
        $this->info('Filament installé et assets publiés.');
    }
}