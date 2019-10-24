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

    protected $fillable = ['title','description','image'];
	
	public function User_offer()
	{
		return $this->hasMany('App\Models\User_offer' , 'offer_id');
	}
   
}
