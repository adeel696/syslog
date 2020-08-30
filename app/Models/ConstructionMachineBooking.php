<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConstructionMachineBooking extends Model
{
    //Table name
    protected $table = 'contruction_machinaries_bookings';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['booking_id', 'contruction_machinary_id', 'type_of_machinery', 'specification', 'delivery_place_country_id', 'delivery_place_city_id', 'delivery_deadline', 'duration_of_user', 'preferences', 'others', 'user_id','amount','description','status','country_id'];
   
	public function Booking()
	{
		return $this->belongsTo('App\Models\Booking' , 'booking_id');
	}
	
	public function ConstructionMachine()
	{
		return $this->belongsTo('App\Models\ConstructionMachine' , 'contruction_machinary_id');
	}
	
	public function Delivery_place_city()
	{
		return $this->belongsTo('App\Models\City' , 'delivery_place_city_id');
	}
	
	public function User()
	{
		return $this->belongsTo('App\Models\User' , 'user_id');
	}
}
