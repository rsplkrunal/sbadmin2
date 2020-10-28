<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockOfMonth extends Model
{
     /**
     * Get the user that owns the phone.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
