<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //Table name
    protected $table = 'cities';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['name','country_id'];
   
    public function Country()
   {
      return $this->belongsTo('App\Models\Country' , 'country_id');
    }
}
