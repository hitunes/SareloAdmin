<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_products';

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


    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
    
}
