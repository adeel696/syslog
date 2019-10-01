<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    //Table name
    protected $table = 'warehouses';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['name','address','space_available','fare','user_id'];
   
    public function User()
   {
      return $this->belongsTo('App\Models\User' , 'user_id');
    }
  
}
