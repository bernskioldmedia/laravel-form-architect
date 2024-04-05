<?php

namespace BernskioldMedia\LaravelFormArchitect;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;

class LaravelFormArchitectServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        AboutCommand::add('Laravel Form Architect', fn() => [
            'Version' => '1.0.0',
        ]);
    }

}