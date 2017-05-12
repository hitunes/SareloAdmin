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
    protected $fillable = ['time_range', 'slot_available', 'day_of_week'];

    public function OrderSlot()
    {
        return $this->hasMany('App\Models\OrderSlot');
    }


    public static function getAvailableSlot($date)
    {
        $all_slots = self::all();

        $slots = [];

        foreach ($all_slots as $slot) {
            $result = \DB::select("SELECT count(id) as count from order_slots where slot_id=:slot_id AND delivery_date=:datum OR delivery_date is null", ["datum" =>date('Y-m-d', strtotime($date)), "slot_id" => $slot->id]);

            $slot = $slot->toArray();
            $slot['used_count'] = $result[0]->count;
            $slots[] = (object) $slot;
        }


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
