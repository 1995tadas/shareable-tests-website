<?php

namespace App\Providers;

use App\Observers\QuestionObserver;
use App\Observers\TestObserver;
use App\Question;
use App\Test;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        Test::observe(TestObserver::class);
        Question::observe(QuestionObserver::class);
    }
}
