<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('view-student', function (User $user) {
            if ($user->role === "admin" || $user->role === "guest") {
                return true;
            }
            return false;
        });
    
        Gate::define('store-student', function (User $user) {
            if ($user->role === "admin") {
                return true;
            }
            return false;
        });
    
        Gate::define('edit-student', function (User $user) {
            if ($user->role === "admin") {
                return true;
            }
            return false;
        });
    
        Gate::define('destroy-student', function (User $user) {
            if ($user->role === "admin") {
                return true;
            }
            return false;
        });

        Gate::define('view-major', function (User $user) {
            return in_array($user->role, ['admin', 'guest']);
        });
    
        Gate::define('store-major', function (User $user) {
            return $user->role === "admin";
        });
    
        Gate::define('edit-major', function (User $user) {
            return $user->role === "admin";
        });
    
        Gate::define('destroy-major', function (User $user) {
            return $user->role === "admin";
        });
    }
}
