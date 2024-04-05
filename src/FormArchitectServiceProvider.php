<?php

namespace BernskioldMedia\LaravelFormArchitect;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use function config_path;

class FormArchitectServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        AboutCommand::add('Laravel Form Architect', fn() => [
            'Version' => '1.0.0',
        ]);

        $this->publishes([
            __DIR__ . '/../config/form-architect.php' => config_path('form-architect.php'),
        ], 'laravel-form-architect-config');

        Blade::anonymousComponentPath(__DIR__ . '/../resources/views/components', 'form-architect');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/form-architect.php', 'form-architect'
        );
    }

}