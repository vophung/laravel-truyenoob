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


        Gate::define('admin',function($user){
            return $user->hasRole('admin');
        });

        Gate::define('writer',function($user){
            return $user->hasRole('writer');
        });

        Gate::define('admin',function($user){
            return $user->hasRole('admin');
        });

        Gate::define('edit-users',function($user){
            return $user->hasAnyRoles(['admin-edit','admin']);
        });

        Gate::define('delete-users',function($user){
            return $user->hasAnyRoles(['admin-delete','admin']);
        });

        Gate::define('admin-writer-edit-delete',function($user){
            return $user->hasAnyRoles(['admin','writer','admin-edit','admin-delete']);
        });

        Gate::define('admin-edit-delete',function($user){
            return $user->hasAnyRoles(['admin','admin-edit','admin-delete']);
        });

        Gate::define('admin-writer',function($user){
            return $user->hasAnyRoles(['admin','writer']);
        });
        // Gate::define('super-admin',function($user){
        //     return $user->hasAnyRoles([

        //     ]);
        // });

    }
}
