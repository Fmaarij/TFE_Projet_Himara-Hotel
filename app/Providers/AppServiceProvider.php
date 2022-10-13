<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Contactinformation;
use App\Models\Room;
use App\Models\Welcomemsg;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
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
        Paginator::useBootstrapFive();
        view()->composer('*',function($view) {
            $view->with('user', Auth::user());
            $view->with('welcomemsg', Welcomemsg::all());
            $view->with('contactinfo', Contactinformation::all());
            $view->with('roomdispo',Room::orderBy('created_at','asc')->take(5)->get());
            $view->with('$aboutuse', About::all());
            // $view->with('hotelinfo', HotelInfo::all());
            // $view->with('news', Article::all()->take(4));
        });
    }
}
