<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConstructionMachineBooking extends Model
{
    //Table name
    protected $table = 'contruction_machinery_bookings';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['booking_id', 'contruction_machinary_id', 'type_of_machinery', 'specification', 'delivery_place_city_id', 'delivery_deadline', 'duration_of_user', 'preferences', 'others'];
   
	public function Booking()
	{
		return $this->belongsTo('App\Models\Booking' , 'booking_id');
	}
	
	public function Construction_machinary()
	{
		return $this->belongsTo('App\Models\Construction_machinary' , 'contruction_machinary_id');
	}
	
	public function Delivery_place_city()
	{
		return $this->belongsTo('App\Models\City' , 'delivery_place_city_id');
	}
}
