<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table="hotels";


    public function hoteltype()
    {
        return $this->belongsTo('App\HotelType','hotel_type_id');
    }
    

}
