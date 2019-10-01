<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
       //Table name
   protected $table = 'bookings';
   //primary key
   public $primarykey = 'id';
   //timestamps
   public $timestamp = true;

   protected $fillable = ['user_id','user_vehicle_id','warehouse_id','place_of_departure_id',
   'place_of_arrival_id','amount','date','status'];
  
   public function User()
  {
     return $this->belongsTo('App\Models\User' , 'user_id');
   }
   public function User_vehicle()
  {
     return $this->belongsTo('App\Models\User_vehicle' , 'user_vehicle_id');
   }
   public function Warehouse()
  {
     return $this->belongsTo('App\Models\Warehouse' , 'warehouse_id');
   }
   public function Place_of_departure()
  {
     return $this->belongsTo('App\Models\City' , 'place_of_departure_id');
   }public function Place_of_arrival()
   {
      return $this->belongsTo('App\Models\City' , 'place_of_arrival_id');
    }
}
