<?php

namespace App\Providers;

use App\Models\Bootcamp;
use App\Models\CompanyProfile;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Diploma;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $profile=CompanyProfile::first();
        $course_category=CourseCategory::all();
        $foo_courses=Course::all(); 
        $bootcamps=Bootcamp::all();  
        $diplomas=Diploma::all();
        view()->share(compact('course_category','bootcamps','diplomas','profile','foo_courses')); 
    }
}
