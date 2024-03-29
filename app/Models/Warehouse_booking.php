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

    protected $fillable = ['booking_id', 'product_type', 'packaging', 'weight', 'volume', 'needed_space', 'preferences', 'preference_text', 'warehouse_country_id', 'city_id', 'user_id','amount','approx_storage_time','description','status','country_id'];
   
	public function Booking()
	{
		return $this->belongsTo('App\Models\Booking' , 'booking_id');
	}
	
	public function City()
	{
		return $this->belongsTo('App\Models\City' , 'city_id');
	}
	
	public function User()
	{
		return $this->belongsTo('App\Models\User' , 'user_id');
	}
}
