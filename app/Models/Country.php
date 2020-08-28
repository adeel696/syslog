<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //Table name
     protected $table = 'countries';
     //primary key
     public $primarykey = 'id';
     //timestamps
     public $timestamp = true;
 
     protected $fillable = ['name', 'country_code', 'flag'];
	 
	 
	public function City()
	{
		return $this->hasMany('App\Models\City' , 'country_id');
	}
}
