<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //Table name
    protected $table = 'vehicles';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['name','capacity', 'specification'];
	
	public function User_vehicle()
	{
		return $this->hasMany('App\Models\User_vehicle' , 'vehicle_id');
	}
	
	public function Fare()
	{
		return $this->hasMany('App\Models\Fare' , 'vehicle_id');
	}
	
	public function Vehicle_booking()
	{
		return $this->hasMany('App\Models\Vehicle_booking' , 'vehicle_id');
	}
   
}
