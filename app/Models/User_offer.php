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

    protected $fillable = ['booking_id','user_id'];
    public function Booking()
   {
      return $this->belongsTo('App\Models\Booking' , 'booking_id');
    }
    public function User()
   {
      return $this->belongsTo('App\Models\User' , 'user_id');
    }
}
