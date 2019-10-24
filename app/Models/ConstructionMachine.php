<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConstructionMachine extends Model
{
     //Table name
     protected $table = 'construction_machinaries';
     //primary key
     public $primarykey = 'id';
     //timestamps
     public $timestamp = true;
 
     protected $fillable = ['name', 'capacity', 'specification',];
	 
	 
	public function City()
	{
		return $this->hasMany('App\Models\City' , 'country_id');
	}
	
	public function User_vehicle()
	{
		return $this->hasMany('App\Models\User_vehicle' , 'construction_machinary_id');
	}
	
	public function Contruction_machinery_booking()
	{
		return $this->hasMany('App\Models\Contruction_machinery_booking' , 'construction_machinary_id');
	}
}
