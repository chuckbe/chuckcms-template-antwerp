<?php

namespace Chuckbe\ChuckcmsTemplateAntwerp;

use Chuckbe\ChuckcmsTemplateAntwerp\Commands\PublishAntwerp;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateAntwerpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishAntwerp::class,
            ]);
        }
        
        //php artisan vendor:publish --tag=chuckcms-template-antwerp-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-antwerp'),
        ], 'chuckcms-template-antwerp-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-antwerp.php' => config_path('chuckcms-template-antwerp'),
        // ], 'chuckcms-template-antwerp-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-antwerp');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-antwerp.php', 'chuckcms-template-antwerp-config'
        // );
    }
}
