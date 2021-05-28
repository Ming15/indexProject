<?php

namespace App\Providers;

use EasyWeChat\Factory;
use Illuminate\Support\ServiceProvider;

class EasyWechatProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('officialAccount', function() {
            $config = config('easywechat.officialAccount');
            return Factory::officialAccount($config);
        });
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
