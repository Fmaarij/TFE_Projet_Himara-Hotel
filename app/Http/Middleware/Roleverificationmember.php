<?php

namespace App\Http\Middleware;

use App\Models\Booking;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Roleverificationmember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        {
            // $booking = Booking::where('user_id','=',Auth::user()->id) && Booking::where('room_id','=',Auth::user()->room_id)->get();
            // dd(boo)
            //verifier si l'utilisateur est une mebre et à reservé (role_id==4 (member))
            // $bookings = Booking::all();
            // foreach($bookings as $booking){
                // dd($booking->user_id === Auth::user()->id );
                // dd($booking->user_id);
                // $booking->user_id == Auth::user()->id || Auth::user()->role_id == 1;

            // if($booking->user_id === Auth::user()->id || $booking->room_id == Auth::user()->id){

            if(Auth::user()->role_id ==4 || Auth::user()->role_id ==3 || Auth::user()->role_id ==2 || Auth::user()->role_id ==1){
              //si oui, continuer jusqu'à la prochaine requete
              return $next($request);
          }else{
              //sinon renvoyer un 403 (accès forbidden)
              abort('403');
          }

    }
}
// }
}
