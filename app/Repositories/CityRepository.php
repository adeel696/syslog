<?php

namespace App\Repositories;

use App\Models\City;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class CityRepository {
	
	/**
	 * @var App\Models\city
	 */
	protected $db_city;
		
    public function __construct(City $db_city) 
    {
        $this->db_city = $db_city;
    }
	
	public function addCity($inputs)
    {
        $db_city = $this->storeCity(new $this->db_city ,  $inputs);
        return $db_city;
    }
	public function updateCity($inputs, $id)
	{
		$db_city = $this->db_city->findOrFail($id);
		$city_id = $this->storeCity($db_city, $inputs, $id);
		return $city_id;
	}
	
	
	function storeCity($db_city , $inputs, $id = null)
	{	
		$db_city->name = $inputs['name'];
		$db_city->country_id = $inputs['country_id'];
		$db_city->save();
		return $db_city;
	}
	
	public function getCity($id = null)
    {
		if($id==null)
		{
			$info_city = $this->db_city->select('id', 'name', 'country_id')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_city = $this->db_city->select('id', 'name', 'country_id')->findOrFail($id);
		}
        return $info_city;
    }
	
}

