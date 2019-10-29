<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City_distance extends Model
{
    //Table name
    protected $table = 'city_distances';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['distance','city_id_1','city_id_2'];
   
    public function City1()
   {
      return $this->belongsTo('App\Models\City' , 'city_id_1');
    }
    public function City2()
   {
      return $this->belongsTo('App\Models\City' , 'city_id_2');
    }
}
