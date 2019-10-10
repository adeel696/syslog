<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //Table name
     protected $table = 'countries';
     //primary key
     public $primarykey = 'id';
     //timestamps
     public $timestamp = true;
 
     protected $fillable = ['name'];
}
