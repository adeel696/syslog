<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Input;
use App\Repositories\ImageRepository;
use DB;
use Illuminate\Support\Facades\Hash;
use Auth; 

class UserRepository {
	
	/**
	 * @var App\Models\User
	 */
	protected $db_user;
	protected $imageRps;
	protected $db_admin;
		
    public function __construct(User $db_user, Admin $db_admin, ImageRepository $imageRps) 
    {
        $this->db_user = $db_user;
		$this->db_admin = $db_admin;
		$this->imageRps = $imageRps;
    }
	
	public function updateUser($inputs, $id)
	{
		$db_user = $this->db_user->findOrFail($id);
		$db_user = $this->storeUser($db_user, $inputs, $id);
		return $db_user;
	}
	
	function storeUser($db_user , $inputs, $id = null)
	{
		if ($id) 
		{
			$db_user->id = $id;
			if(isset($inputs['avatar']))
			{
				if($db_user->avatar != NULL)
					$this->imageRps->delete($db_user->avatar, '/media/avatar/');
				$db_user->avatar = $this->imageRps->upload($inputs['avatar'], '/media/avatar/', '300', '300');
			}
		}
		
		$db_user->name = $inputs['name'];
		$db_user->email = $inputs['email'];
		
		if(isset($inputs['password']))
			$db_user->password = Hash::make($inputs['password']);
			
		$db_user->save();
		
		return $db_user;
	}
	
	public function updateAdmin($inputs, $id)
	{
		$db_admin = $this->db_admin->findOrFail($id);
		$db_admin = $this->storeAdmin($db_admin, $inputs, $id);
		return $db_admin;
	}
	
	function storeAdmin($db_admin , $inputs, $id = null)
	{
		if ($id) 
		{
			$db_admin->id = $id;
			if(isset($inputs['avatar']))
			{
				if($db_admin->avatar != NULL)
					$this->imageRps->delete($db_admin->avatar, '/media/avatar/');
				$db_admin->avatar = $this->imageRps->upload($inputs['avatar'], '/media/avatar/', '300', '300');
			}
		}
		
		$db_admin->name = $inputs['name'];
		$db_admin->email = $inputs['email'];
		
		if(isset($inputs['password']))
			$db_admin->password = Hash::make($inputs['password']);
		$db_admin->save();
		return $db_admin;
	}
	
	public function getUser($type = null, $id = null)
    {
		if($id==null)
		{
			if($id==null)
			{
				$info_User = $this->db_user->select('id', 'name', 'email', 'password', 'type', 'username', 'avatar', 'job_id','superintendent_id')->where('type','=', $type)->orderBy('created_at', 'DESC')->get();
			}
			else
			{
				$info_User = $this->db_user->select('id', 'name', 'email', 'password', 'type', 'username', 'avatar', 'job_id','superintendent_id')->orderBy('created_at', 'DESC')->get();
			}
		}
		else
		{
			$info_User = $this->db_user->select('id', 'name', 'email', 'password', 'type', 'username', 'avatar', 'job_id','superintendent_id')->findOrFail($id);
		}
        return $info_User;
    }
}

