<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    //Table name
    protected $table = 'suburbs';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['name','city_id'];
   
    public function City()
    {
      return $this->belongsTo('App\Models\City' , 'city_id');
    }
}
