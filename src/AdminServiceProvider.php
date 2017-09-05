<?php

namespace ElementsFramework\Admin;


use Backpack\Base\BaseServiceProvider;
use Backpack\CRUD\CrudServiceProvider;
use Backpack\PermissionManager\PermissionManagerServiceProvider;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{

    /**
     * Bootstraps the package.
     * @return void
     */
    public function boot()
    {
        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/Migration');

        $this->publishes([
            __DIR__.'/Config/laravel-permission.php' => config_path('laravel-permission.php'),
            __DIR__.'/Config/backpack/base.php' => config_path('backpack/base.php'),
            __DIR__.'/Config/backpack/crud.php' => config_path('backpack/crud.php'),
            __DIR__.'/Config/backpack/permissionmanager.php' => config_path('backpack/permissionmanager.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes/menucrud.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(BaseServiceProvider::class);
        $this->app->register(CrudServiceProvider::class);
        $this->app->register(PermissionManagerServiceProvider::class);
        $this->app->register(PermissionManagerServiceProvider::class);
        $this->app->register(\Cviebrock\EloquentSluggable\ServiceProvider::class);
        $this->app->register(\Backpack\PageManager\PageManagerServiceProvider::class);
    }

}