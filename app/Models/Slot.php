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
        $slots = \DB::select("Select * from slots where slot_available
                            > (SELECT count(os.slot_id) from slots s 
                             left join order_slots os ON s.id = os.slot_id
                             where os.delivery_date=?)", [date('Y-m-d', strtotime($date))]);
        
        return $slots;
    }
}
