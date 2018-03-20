<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//  This line is for getting rid of that wrapping data-object in the resources.
//  use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  This line is for getting rid of that wrapping data-object in the resources.
        //  Resource::withoutWrapping();
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
