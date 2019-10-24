<?php

namespace App\Models;

use App\Notifications\AdminResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
	protected $guard_name = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'name', 'email', 'password', 'avatar'
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
     * Validation rules
     *
     * @var array
     */
    public static $rules = [ 
		'name' => 'required|max:255',
		'email' => 'required|email|max:255|unique:admins',
		'password' => 'required|min:6',
		'avatar' => 'image|mimes:jpg,png,jpeg|min:1|max:2048',
    ];

}