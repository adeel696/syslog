<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gooddeal extends Model
{
    //Table name
    protected $table = 'gooddeals';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamp = true;

    protected $fillable = ['title','description','image','user_id', 'is_publish', 'country_id'];
	
	public function User()
	{
		return $this->belongsTo('App\Models\User' , 'user_id');
	}
   
}
