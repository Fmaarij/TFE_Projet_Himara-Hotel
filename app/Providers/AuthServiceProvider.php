<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //admin and moderator gates
        Gate::define('accessadmin', function ($user) {
            //  return $user->role_id == '1';
            if($user->role_id == 1 || $user->role_id ==2) {

                return true;
            }
        });
        //editor gates
        Gate::define('accesseditor', function ($user) {
            //  return $user->role_id == '1';
            if($user->role_id==3 || $user->role_id == 1 || $user->role_id ==2 ) {

                return true;
            }
        });
        //CRUD buttons
        Gate::define('access-btn-crud', function ($users) {

            if( Auth::user()->role_id == 2 || (Auth::user()->role_id == 1 )) {

                return true;
            }
        });

    }
}
