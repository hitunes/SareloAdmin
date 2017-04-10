<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderSlot extends Model
{
    protected $guarded = ['id'];

    public function slot()
    {
        return $this->belongsTo('App\Models\Slot');
    }
}
