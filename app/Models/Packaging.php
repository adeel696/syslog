<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    //Table name
	protected $table = 'packagings';
	//primary key
	public $primarykey = 'id'; 
	//timestamps
	public $timestamp = true;
	
	protected $fillable = ['type', 'detail'];
}
