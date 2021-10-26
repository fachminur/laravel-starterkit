<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Rmenu;

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
        View::composer('*', function($view)
        {
            $menus = Rmenu::where('status_menu', '1')->where('idr_parent',null)->orderBy('order_menu')->get();
            foreach($menus as $r){
                $child = Rmenu::where('status_menu', '1')->where('idr_parent',$r->idr_menu)->orderBy('order_menu')->get();
                $r->child = $child;
            }
            // dd($menus);
            $view->with('menus', $menus);
        });
    }
}
