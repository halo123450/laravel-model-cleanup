<?php

namespace Halo123450\ModelCleanup;

use Illuminate\Support\ServiceProvider;
use Halo123450\ModelCleanup\Commands\CleanUpModelsCommand;

class ModelCleanupServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/model-cleanup.php' => config_path('model-cleanup.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/model-cleanup.php', 'model-cleanup');

        $this->commands([
            CleanUpModelsCommand::class,
        ]);
    }
}
