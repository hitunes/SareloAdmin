<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function user_address()
    {
    	return $this->belongsTo('App\Models\UserAddress');
    }

    public function order_products()
    {
    	return $this->hasMany('App\Models\OrderProduct');
    }

    public function products()
    {
    	return $this->belongsToMany('App\Models\Product', 'order_products'); //second parameter specifies the pivot table name that links ptoducts with orders
    }
}
