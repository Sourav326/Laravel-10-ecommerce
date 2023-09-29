<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Brand;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $menuItemsBrands = Brand::where('status',0)->get();
        view()->share('menuItemsBrands',$menuItemsBrands);
        Paginator::defaultView('admin.pagination.pagination');
    }
}
