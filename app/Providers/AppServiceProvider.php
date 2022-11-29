<?php

namespace App\Providers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\ServiceProvider;
use Database\Seeders\RolePermissionSeeder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        DatabaseSeeder::$seeds[] = RolePermissionSeeder::class;
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
