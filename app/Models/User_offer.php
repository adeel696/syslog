<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_offer extends Model
{
	//Table name
	protected $table = 'user_offers';
	//primary key
	public $primarykey = 'id';
	//timestamps
	public $timestamp = true;
	
	protected $fillable = ['offer_id','user_id', 'quantity', 'others'];
	
	public function Offer()
	{
		return $this->belongsTo('App\Models\Offer' , 'offer_id');
	}
	public function User()
	{
		return $this->belongsTo('App\Models\User' , 'user_id');
	}
}
