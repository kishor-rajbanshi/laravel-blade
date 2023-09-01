<?php

namespace KishorRajbanshi\Blade;

use KishorRajbanshi\Blade\Console\BladeCommand;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BladeCommand::class
            ]);
        }
    }
}
