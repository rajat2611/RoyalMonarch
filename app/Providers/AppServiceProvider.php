<?php

namespace App\Providers;
use App\Blog;
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
     
            view()->composer(['pages.blog', 'pages.single-blog'], function ($view) {
        
                $banking=Blog::where('category', 'banking')->count();
                $investement=Blog::where('category', 'investement')->count();
                $mutual_Fund=Blog::where('category', 'mutual Fund')->count();
                $insurance=Blog::where('category', 'insurance')->count();
                $real_estate=Blog::where('category', 'real estate')->count();
                $retirement=Blog::where('category', 'retirement')->count();
                $tax_planning=Blog::where('category', 'tax planning')->count();
                $economic=Blog::where('category', 'economic')->count();
                $all = $banking + $investement + $mutual_Fund + $insurance + $real_estate + $retirement + $insurance + $economic + $tax_planning;
            $list=['all'=>$all,'banking'=>$banking,'investement'=>$investement,'mutual_Fund'=>$mutual_Fund,'insurance'=>$insurance,'real_estate'=>$real_estate,'retirement'=>$retirement,'tax_planning'=>$tax_planning,'economic'=>$economic];


                $view->with(["list"=>$list]);
            });


            view()->composer(['dashboard.index','dashboard.services', 'dashboard.tradebook','dashboard.p&l','dashboard.tax&pl','dashboard.overview','dashboard.statement','dashboard.payment_Gateway','dashboard.account','dashboard.referrals'], function ($view) {
        
                $user = Auth::user()->join;
                


                $view->with(["user"=>$user]);
            });
 
    }
}
