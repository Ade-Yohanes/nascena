<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
// use View;

use DB;

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
        $nav_brand = DB::table('brand')
                     ->select( 'id','logo','name_brand', 'slug' )
                     ->take(10)
                     ->get();
        View::share('nav_brand',$nav_brand);

        
        $category = DB::table('categories')
                    ->take(10)
                    ->get();

        View::share('category',$category);

        $experian = DB::table('experiance')
                    ->select('project_name','slug')
                    ->take(6)
                    ->get();
        View::share( 'experian_list', $experian );


       
        

    }
}
