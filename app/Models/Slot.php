<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slots';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['time_range', 'slot_available'];

    public function OrderSlot()
    {
        return $this->hasMany('App\Models\OrderSlot');
    }

    
    public static function getAvailableSlot($date)
    {
        $slots = self::select('slots.id', 'slots.time_range', 'slots.slot_available')
                        ->leftJoin('order_slots','order_slots.slot_id', '=', 'slots.id')
                        ->where('order_slots.delivery_date', $date)
                        ->orWhereNull('order_slots.delivery_date')
                        ->groupBy('slots.id')
                        ->havingRaw("count(order_slots.slot_id) <  slots.slot_available")
                        ->get();
        return $slots;
    }
}
