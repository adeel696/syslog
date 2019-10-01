<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_vehicle_image extends Model
{
   //Table name
   protected $table = 'user_vehicle_images';
   //primary key
   public $primarykey = 'id';
   //timestamps
   public $timestamp = true;

   protected $fillable = ['user_vehicle_id','source'];
  
   public function User_vehicle()
  {
     return $this->belongsTo('App\Models\User_vehicle' , 'user_vehicle_id');
   }
  
}
