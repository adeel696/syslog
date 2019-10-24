<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    //Table name
	protected $table = 'fares';
	//primary key
	public $primarykey = 'id'; 
	//timestamps
	public $timestamp = true;
	
	protected $fillable = ['vehicle_id', 'type_of_vehicle', 'from_city', 'to_city', 'capacity', 'insurances_amount', 'loading_price', 'offloading_price', 'fare'];
	
	public function Vehicle()
	{
		return $this->belongsTo('App\Models\Vehicle' , 'vehicle_id');
	}
	
	public function FromCity()
	{
		return $this->belongsTo('App\Models\City' , 'from_city');
	}
	
	public function ToCity()
	{
		return $this->belongsTo('App\Models\City' , 'to_city');
	}
}
