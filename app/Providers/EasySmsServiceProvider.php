<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Overtrue\EasySms\EasySms;

class EasySmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 把easySMS绑定到容器
        $this->app->singleton(EasySms::class, function() { // 绑定名称
            return new EasySms(config('sms'));
        });

        $this->app->alias(EasySms::class, 'easysms'); // 给绑定名称设置别名
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
