<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
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
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-edit', function($user){
          return $user->hasRole('admin');
        });

        Gate::define('admin', function($user){
          return $user->is_admin == 1;
        });

        Gate::define('user', function($user){
          return $user=([
            'is_user == 3',
            'is_admin == 1'
          ]);
        });

        Gate::define('verifikator', function($user){
          return $user->is_verfikator == 2;
        });

        Gate::define('user-edit', function($user){
          return $user=([
            'is_verifikator == 2',
            'is_user == 3'
          ]);
        });
    }
}
