<?php

namespace Superlatif\InfomaniakVod;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use Superlatif\InfomaniakVod\Controllers\ChapterController;
use Superlatif\InfomaniakVod\Controllers\FolderController;
use Superlatif\InfomaniakVod\Controllers\MediaController;
use Superlatif\InfomaniakVod\Controllers\PlaylistController;

class InfomaniakVodServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'infomaniak-vod');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'infomaniak-vod');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/infomaniak-vod.php' => config_path('infomaniak-vod.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/infomaniak-vod'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/infomaniak-vod'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/infomaniak-vod'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        Http::macro('infomaniak', function () {
            $token = config('infomaniak-vod.token');
            $channel = config('infomaniak-vod.channel');
            $base_url = config('infomaniak-vod.api_base_uri') . $channel;
            return Http::withToken($token)->baseUrl($base_url);
        });

        if (!Collection::hasMacro('paginate')) {
            Collection::macro('paginate', function ($perPage = 10, $page = null, $options = []) {
                $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                return (new LengthAwarePaginator($this->forPage($page, $perPage), $this->count(), $perPage, $page, $options))->withPath('');
            });
        }

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/infomaniak-vod.php', 'infomaniak-vod');

        // Register the classes to use with the facades
        $this->app->singleton('infomaniak.folder', function () {return new FolderController;});
        $this->app->singleton('infomaniak.media', function () {return new MediaController;});
        $this->app->singleton('infomaniak.playlist', function () {return new PlaylistController;});
        $this->app->singleton('infomaniak.chapter', function () {return new ChapterController;});
    }
}
