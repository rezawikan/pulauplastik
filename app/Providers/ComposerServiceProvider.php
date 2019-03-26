<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposer\OtherTypeComposer;
use App\Http\ViewComposer\OtherLangComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer([
          'dashboard.resources.other._form',
          'other.index'
        ], OtherTypeComposer::class);

        View::composer([
          'dashboard.resources.other._form',
          'other.index'
        ], OtherLangComposer::class);
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
