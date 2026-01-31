<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyJobProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bindMethod(MyJob::class.'@handle',function($job , $app){ return $job->handle();});
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
