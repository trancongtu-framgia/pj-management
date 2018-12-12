<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\SubjectInterface;
use App\Repositories\Eloquents\DbSubjectRepository;
use App\Repositories\Interfaces\GroupInterface;
use App\Repositories\Eloquents\DbGroupRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SubjectInterface::class, DbSubjectRepository::class);
        $this->app->bind(GroupInterface::class, DbGroupRepository::class);
    }
}
