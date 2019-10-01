<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //Table name
    protected $table = 'cities';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['name'];
   
}
