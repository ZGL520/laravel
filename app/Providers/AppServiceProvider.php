<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    //appserver启动之后执行boot
    public function boot()
    {
        //设置laravel默认string的长度 767/4 = 191.xxx
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    //appserver启动之前执行
    public function register()
    {
        //
    }
}
