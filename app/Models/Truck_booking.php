<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck_booking extends Model
{
    //Table name
    protected $table = 'truck_bookings';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['booking_id','type_of_truck ','specifications'
        ,'place_of_departure_city_id','place_of_arrival_city_id','capacity'
        ,'capacity_type', 'information_product', 'value_product', 'others','insurances','loading','offloading'
		];
   
	public function Booking()
	{
		return $this->belongsTo('App\Models\Booking' , 'booking_id');
	}
	public function Place_of_departure_city()
	{
		return $this->belongsTo('App\Models\City' , 'place_of_departure_city_id');
	}
	public function Place_of_arrival_city()
	{
		return $this->belongsTo('App\Models\City' , 'place_of_arrival_city_id');
	}
}
