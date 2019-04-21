<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use DB;
use view;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

   //compose all the views....
                view()->composer('*', function ($view) 
            {
                            $deposit = DB::table('deposit')
                                            ->select('deposit.*')
                                            ->where('user_id',Auth::user()->id)
                                            ->get();
        //...with this variable
        
        $view->with('deposit', $deposit );    
    }); 

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
