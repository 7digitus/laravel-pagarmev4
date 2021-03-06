<?php

namespace digitus\LaravelPagarMeV4\Providers;

use Illuminate\Support\ServiceProvider;

use PagarMe\Client as PagarMe;

class PagarMeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/pagarme.php' => config_path('pagarme.php')
        ], 'pagarme');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('PagarMe', function ($app) {
            return new PagarMe(
                $app->config->get('pagarme.keys.api')
            );
        });
    }
}
