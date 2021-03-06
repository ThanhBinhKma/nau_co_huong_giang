<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
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
        Schema::defaultStringLength(191);

        $home_services = Service::all();
        $home_menus = Menu::all();
        View::share(['home_services'=> $home_services,'home_menus' => $home_menus]);
    }
}
