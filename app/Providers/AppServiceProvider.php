<?php

namespace App\Providers;

use App\User;
use App\Student;
use App\Parents;
use App\Examination;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\View\View;

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
        Schema::defaultStringLength(191);
        view()->composer('*',function(view $view){
            $teachers=User::all();
            $students=Student::all();
            $examinations=Examination::all();
            // $parents=Parents::all();
            $view->with([
                'students'=>count($students),
                'teachers'=>count($teachers),
                // 'parents'=>count($parents),
                'examinations'=>count($examinations),
                ]);
        });
        //
    }
}
