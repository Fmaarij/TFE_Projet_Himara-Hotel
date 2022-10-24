<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Booking;
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
  //members gates
        Gate::define('access-btn-booking', function ($users) {
            // $booking = Booking::where('user_id','=',Auth::user()->id)->get();
                    //   $booking = Booking::where('user_id','=',Auth::user()->id) || Booking::where('room_id','=',Auth::user()->room_id)->get();
            // dd($booking->id);
            // foreach($booking as $booc){
                // dd($booc->id);
                $bookings = Booking::all();
                foreach($bookings as $booking){
                    // if($booking->user_id == Auth::user()->id && $booking->room_id == Auth::user()->room_id){
                        if($booking->user_id == Auth::user()->id){

                return true;
            }
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
// $booking = Booking::where('user_id','=',Auth::user()->id)->get();
