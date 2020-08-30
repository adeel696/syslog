<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //Table name
    protected $table = 'offers';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['title','description','image','type','insurance_type','range_of_age_of_vehicule','value_of_vehicle','power','designation','packaging','caracteristics','brand','reference','others','amount', 'country_id'];
	
	public function User_offer()
	{
		return $this->hasMany('App\Models\User_offer' , 'offer_id');
	}
   
}
