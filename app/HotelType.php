<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelType extends Model
{
    protected $table="hotel_types";

    public function hotel()
    {
        return $this->hasMany('App\Hotel','hotel_type_id');
    }

}
