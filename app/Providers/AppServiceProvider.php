<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Brand;
use App\Models\BrandCategory;

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
        $menuItemsCategoryBrands = BrandCategory::get();
        view()->share(['menuItemsBrands'=>$menuItemsBrands,'menuItemsCategoryBrands'=>$menuItemsCategoryBrands]);

        Paginator::defaultView('admin.pagination.pagination');
    }
}
