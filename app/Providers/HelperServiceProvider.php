<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Used this stack overflow answer: https://stackoverflow.com/questions/28290332/best-practices-for-custom-helpers-on-laravel-5/28360186#28360186
 *
 * This feels a _little_ janky, not sure about dynamic includes, but it works for now.
 */
class HelperServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        foreach (glob(app_path().'/Helpers/*.php') as $filename){
            require_once($filename);
        }
    }
}
