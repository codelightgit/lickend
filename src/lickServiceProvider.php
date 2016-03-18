<?php

namespace codelight\lick;

use Illuminate\Support\ServiceProvider;

class lickServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        echo 'janz toll';
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}