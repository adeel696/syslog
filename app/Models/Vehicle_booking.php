<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle_booking extends Model
{
    //Table name
    protected $table = 'vehicle_bookings';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['booking_id', 'vehicle_id', 'type_of_vehicle ','specifications'
        ,'place_of_departure_city_id','place_of_departure_country_id', 'place_of_arrival_country_id','place_of_arrival_city_id','capacity', 'preferences', 'number_of_seats', 'duration'
		, 'others', 'specifications', 'insurances', 'value_product', 'loading', 'offloading', 'user_id','amount','description','status', 'country_id'
		];
   
	public function Booking()
	{
		return $this->belongsTo('App\Models\Booking' , 'booking_id');
	}
	public function Vehicle()
	{
		return $this->belongsTo('App\Models\Vehicle' , 'vehicle_id');
	}
	public function Place_of_departure_city()
	{
		return $this->belongsTo('App\Models\City' , 'place_of_departure_city_id');
	}
	public function Place_of_arrival_city()
	{
		return $this->belongsTo('App\Models\City' , 'place_of_arrival_city_id');
	}
	
	public function User()
	{
		return $this->belongsTo('App\Models\User' , 'user_id');
	}
}
