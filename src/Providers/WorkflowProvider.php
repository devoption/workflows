<?php

namespace DevOption\Workflows\Providers;

use Illuminate\Support\ServiceProvider;

class WorkflowProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/workflows.php', 'workflows'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/workflows.php' => config_path('workflows.php'),
        ]);
    }
}