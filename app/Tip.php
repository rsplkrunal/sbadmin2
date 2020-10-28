<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $guarded = ['id']; 
    /**
     * Get the user that owns the phone.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
