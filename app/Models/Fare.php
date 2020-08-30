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
	
	protected $fillable = ['contruction_machinary_id', 'vehicle_id', 'type_of_vehicle', 'country_id', 'from_city', 'to_city', 'capacity', 'insurances_amount', 'loading_price', 'offloading_price', 'fare'];
	
	public function Vehicle()
	{
		return $this->belongsTo('App\Models\Vehicle' , 'vehicle_id');
	}
	
	public function ConstructionMachine()
	{
		return $this->belongsTo('App\Models\ConstructionMachine' , 'contruction_machinary_id');
	}
	
	public function Country()
	{
		return $this->belongsTo('App\Models\Country' , 'country_id');
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
