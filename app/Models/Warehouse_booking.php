<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse_booking extends Model
{
    //Table name
    protected $table = 'warehouse_bookings';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['booking_id','product_type ','packaging'
        ,'weight','volume','needed_space','preferences'];
   
    public function Booking()
   {
      return $this->belongsTo('App\Models\Booking' , 'booking_id');
    }
}