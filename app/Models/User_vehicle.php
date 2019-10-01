<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_vehicle extends Model
{
    //Table name
    protected $table = 'user_vehicles';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['user_id','vehicle_id','fare','description'];
   
    public function User()
   {
      return $this->belongsTo('App\Models\User' , 'user_id');
    }
    public function Vehicle()
   {
      return $this->belongsTo('App\Models\Vehicle' , 'vehicle_id');
    }
}
