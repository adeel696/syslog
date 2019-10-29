<?php

namespace App\Repositories;

use App\Models\Fare;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class FareRepository {
	
	/**
	 * @var App\Models\fare
	 */
	protected $db_fare;
		
    public function __construct(Fare $db_fare) 
    {
        $this->db_fare = $db_fare;
    }
	
	public function addFare($inputs)
    {
        $db_fare = $this->storeFare(new $this->db_fare ,  $inputs);
        return $db_fare;
    }
	public function updateFare($inputs, $id)
	{
		$db_fare = $this->db_fare->findOrFail($id);
		$fare_id = $this->storeFare($db_fare, $inputs, $id);
		return $db_fare;
	}
	
	function storeFare($db_fare , $inputs, $id = null)
	{	
		if(isset($inputs['contruction_machinary_id']))
			$db_fare->contruction_machinary_id = $inputs['contruction_machinary_id'];
		if(isset($inputs['vehicle_id']))
			$db_fare->vehicle_id = $inputs['vehicle_id'];
        $db_fare->type_of_vehicle = $inputs['type_of_vehicle'];
        $db_fare->from_city = $inputs['from_city'];
		$db_fare->to_city = $inputs['to_city'];
		$db_fare->capacity = $inputs['capacity'];
		$db_fare->insurances_amount = $inputs['insurances_amount'];
		$db_fare->loading_price = $inputs['loading_price'];
		$db_fare->offloading_price = $inputs['offloading_price'];
		$db_fare->fare = $inputs['fare'];
		$db_fare->save();
		return $db_fare;
	}
	
	public function getFare($id = null)
    {
		if($id==null)
		{
			$info_Fare = $this->db_fare->select('id', 'contruction_machinary_id', 'vehicle_id', 'type_of_vehicle', 'from_city', 'to_city', 'capacity', 'insurances_amount', 'loading_price', 'offloading_price', 'fare')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Fare = $this->db_fare->select('id', 'contruction_machinary_id', 'vehicle_id', 'type_of_vehicle', 'from_city', 'to_city', 'capacity', 'insurances_amount', 'loading_price', 'offloading_price', 'fare')->findOrFail($id);
		}
        return $info_Fare;
    }
	
}

