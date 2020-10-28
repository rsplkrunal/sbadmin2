<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smanalysis extends Model
{
    /**
     * Get the user that owns the phone.
     */
    public function StockOfMonth()
    {
        return $this->belongsTo('App\StockOfMonth');
    }
}
