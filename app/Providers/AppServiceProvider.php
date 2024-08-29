<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;


class AppServiceProvider extends ServiceProvider
{

      public function bot()
    {
        Schema::defaultStringLength(192);
        if($this->app->environment('production'))
        {

            URL::forceScheme('https');

        }
    }
 
    public function register()
    {
        //
    }
}
