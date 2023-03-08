<?php

namespace App\Providers;

use App\Http\Interfaces\CheckoutInterface;
use App\Http\Interfaces\CompanyInterface;
use App\Http\Interfaces\PackageInterface;
use App\Http\Repositories\CheckoutRepository;
use App\Http\Repositories\CompanyRepositories;
use App\Http\Repositories\PackageRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CompanyInterface::class, CompanyRepositories::class);
        $this->app->bind(PackageInterface::class, PackageRepository::class);
        $this->app->bind(CheckoutInterface::class, CheckoutRepository::class);
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
