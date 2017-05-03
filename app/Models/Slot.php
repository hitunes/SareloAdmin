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
        // $slots = \DB::select("Select * from slots where slot_available
        //                     > (SELECT count(os.slot_id) from slots s
        //                      left join order_slots os ON s.id = os.slot_id
        //                      where os.delivery_date=?)", [date('Y-m-d', strtotime($date))]);

        $slot =\DB::select("select s.*,count(os.id) as count from slots s
                            left join order_slots os ON os.slot_id = s.id
                            where os.delivery_date=? OR os.delivery_date is null
                            GROUP BY s.id
                            Having s.slot_available > count",
                            [date('Y-m-d', strtotime($date))]);

        return $slots;
    }


    public static function isAvailable($slot_id, $date)
    {
        $status = (bool)  \DB::select("Select * from slots where id = $slot_id AND slot_available
                            > (SELECT count(os.slot_id) from slots s
                             left join order_slots os ON s.id = os.slot_id
                             where os.delivery_date=:date AND os.slot_id =:slot_id)",
                             ["date" => date('Y-m-d', strtotime($date)), 'slot_id' => $slot_id,]);

                            //  dd($status);
        return $status;

    }
}
