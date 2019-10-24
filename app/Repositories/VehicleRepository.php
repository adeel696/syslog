<?php

namespace App\Repositories;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class VehicleRepository {
	
	/**
	 * @var App\Models\vehicle
	 */
	protected $db_vehicle;
		
    public function __construct(Vehicle $db_vehicle) 
    {
        $this->db_vehicle = $db_vehicle;
    }
	
	public function getVehicle($id = null)
    {
		if($id==null)
		{
			$info_vehicle = $this->db_vehicle->select('id', 'name', 'capacity', 'specification')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_vehicle = $this->db_vehicle->select('id', 'name', 'capacity', 'specification')->findOrFail($id);
		}
        return $info_vehicle;
    }
	
}

