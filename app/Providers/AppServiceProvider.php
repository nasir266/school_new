<?php

namespace App\Providers;

use App\Models\feeType;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        View::composer('layout.header', function ($view) {
            $feeType = feeType::where('stu_enrol', 0)->get();
            $view->with('feeType', $feeType);
        });
    }
}
