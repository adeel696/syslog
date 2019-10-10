<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site_machinery_booking extends Model
{
    //Table name
    protected $table = 'site_machinery_bookings';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['booking_id','type_of_machinery ','specifications'
        ,'delivery_place_city_id','delivery_deadline','durartion','others'];
   
    public function Booking()
   {
      return $this->belongsTo('App\Models\Booking' , 'booking_id');
    }
    public function Delivery_place_city()
   {
      return $this->belongsTo('App\Models\City' , 'delivery_place_city_id');
    }
}
