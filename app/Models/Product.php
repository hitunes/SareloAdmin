<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
    protected $fillable = ['name', 'description', 'category_id', 'price', 'unit', 'unit_type_id', 'product_', 'products_image'];


    public function unit_type()
    {
        return $this->belongsTo('App\Models\UnitType');
    }

    
}
