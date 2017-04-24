<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    protected $fillable = ['user_id', 'status', 'total', 'reciever_phone', 'payment_status', 'delivery_instruction'];

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
    protected $guarded = ['id'];

    public function orderSlot()
    {
        return $this->hasOne('App\Models\OrderSlot');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }

    public function order_products()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'order_products');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function user_address()
    {
    	return $this->belongsTo('App\Models\UserAddress');
    }



    public function scopeGetOrderDetails($query, $user_id, $status)
    {
        return $query->with(['user_address','orderSlot', 'order_products' => function($q){
                    $q->with(['product' => function($q) {
                            $q->with('unit_type');
                        }
                    ]);
                }])
                ->where('user_id', $user_id)
                ->where('status', $status);
    }
    
}
