<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('datebr', function ($ex) {
            return "<?php echo (new DateTime($ex))->format('d/m/Y'); ?>";
        });

        //Diretiva para tratar a cor dos posts
        Blade::if('posttype', function ($posttype, $c) {
            return $posttype == $c;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
