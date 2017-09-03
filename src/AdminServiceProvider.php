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
    }

}