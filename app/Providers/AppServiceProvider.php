<?php

namespace App\Providers;

use App\Models\Author;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    const VERSION = '0.0.1';

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Author::all()->count() < 10) {
            Artisan::call('db:seed', ['--class' => 'AuthorSeeder']);
        }
    }
}
