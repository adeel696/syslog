<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //Table name
    protected $table = 'vehicles';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['name','vehicle_type_id'];
   
    public function Vehicle_type()
   {
      return $this->belongsTo('App\Models\Vehicle_type' , 'vehicle_type_id');
    }
    
}
