<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Uasoft\Badaso\Theme\LandyTheme\Commands\LandyThemeSetup;
use Uasoft\Badaso\Theme\LandyTheme\Facades\LandyTheme as FacadesLandyTheme;
use Uasoft\Badaso\Theme\LandyTheme\LandyTheme;

class LandyThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('LandyTheme', FacadesLandyTheme::class);

        $this->app->singleton('badaso-landy-theme', function () {
            return new LandyTheme();
        });

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'badaso-landy');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'landy-theme');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');


        $this->publishes([
            __DIR__.'/../Seeder'                       => database_path('seeders/Badaso/LandyTheme'),
            __DIR__.'/../Config/badaso-landy-theme.php' => config_path('badaso-landy-theme.php'),
            __DIR__.'/../Images/landy-img/' => storage_path('app/public/photos/1'),
            __DIR__.'/../resources/customization/'     => resource_path('js/badaso/theme/landy-theme/'),
            __DIR__ . '/../Tailwind/'                      => base_path(),
        ], 'BadasoLandyTheme');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/uasoft-indonesia/landy-theme'),
        ], 'BadasoLandyThemeViews');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommands();
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(LandyThemeSetup::class);
    }
}
