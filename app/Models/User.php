<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname', 'name', 'email', 'password','phone_number','tax_number',
        'address','facebook','twitter','instagram', 'type', 'parent_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public function Parent()
	{
		return $this->belongsTo('App\Models\User' , 'parent_id');
	}
	
	public function Child()
	{
		return $this->hasMany('App\Models\User' , 'parent_id');
	}
	
	public function User_vehicle()
	{
		return $this->hasMany('App\Models\User_vehicle' , 'user_id');
	}
	
	public function Booking()
	{
		return $this->hasMany('App\Models\Booking' , 'user_id');
	}
}
