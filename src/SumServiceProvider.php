<?php

namespace Sultan\LaravelSumPackage;

use Illuminate\Support\ServiceProvider;

class SumServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the package's services
        $this->app->singleton('sum', function () {
            return new SumService();
        });
    }

    public function boot()
    {
        // Package boot logic (if needed)
    }
}

