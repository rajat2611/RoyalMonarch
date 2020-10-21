<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
            // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();
        Gate::define('manage-blogs', function ($user) {
            if ($user->role_id == 1) {
                return true;
            }
            return false;
        });
        Gate::define('manage-team', function ($user) {
            if ($user->role_id == 1) {
                return true;
            }
            return false;
        });
        Gate::define('manage-career', function ($user) {
            if ($user->role_id == 1) {
                return true;
            }
            return false;
        });
        Gate::define('manage-category', function ($user) {
            if ($user->role_id == 1) {
                return true;
            }
            return false;
        });
        Gate::define('manage-career', function ($user) {
            if ($user->role_id == 1) {
                return true;
            }
            return false;
        });
        
    }

}
