<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	//Table name
	protected $table = 'bookings';
	//primary key
	public $primarykey = 'id'; 
	//timestamps
	public $timestamp = true;
	
	protected $fillable = ['user_id','type','amount','description','status'];
	
	public function User()
	{
		return $this->belongsTo('App\Models\User' , 'user_id');
	}
	
	public function Warehouse_booking()
	{
		return $this->hasMany('App\Models\Warehouse_booking' , 'booking_id');
	}
	
	public function Vehicle_booking()
	{
		return $this->hasMany('App\Models\Vehicle_booking' , 'booking_id');
	}
}
