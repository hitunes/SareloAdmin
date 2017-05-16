<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use App\Models\Slot;

use \Session;


class CheckSlotAvailability
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $date = Session::get('order_details.delivery_date');

        $slot_id = Session::get('order_details.slot_id');


        if($slot_id && $date){

            if(!Slot::isAvailable($slot_id, $date)){

                return redirect('/checkout/choose-delivery-slot')->with('error_message', 'Your choosen slot is no longer available!');
            }
        }
        return $next($request);
    }
}
