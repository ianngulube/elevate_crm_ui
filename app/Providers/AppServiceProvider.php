<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use  App\Utilities\Lists;

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
        
         
        $lists = new Lists;
        //
        $memberStats = $lists->getMembersByMonthThisYear();
        $totalContribution = $lists->totalContributionsThisYear();
        View::share('memberStats', $memberStats );
        View::share('totalContribution', $totalContribution );
   
      }
}
