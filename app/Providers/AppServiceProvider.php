<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //set local timezone
        date_default_timezone_set('America/Bogota');
        Validator::extend('required_username', function ($attribute, $value) {
            return $value;
        });
        Validator::extend('required_password', function ($attribute, $value) {
            return $value;
        });

        Schema::defaultStringLength(191);
    }

    public function register()
    {
        //
    }

}
