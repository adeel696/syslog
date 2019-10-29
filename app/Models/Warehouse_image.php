<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse_image extends Model
{
       //Table name
   protected $table = 'warehouse_images';
   //primary key
   public $primarykey = 'id';
   //timestamps
   public $timestamp = true;

   protected $fillable = ['warehouse_id','source'];
  
   public function Warehouse()
  {
     return $this->belongsTo('App\Models\Warehouse' , 'warehouse_id');
   }
}
