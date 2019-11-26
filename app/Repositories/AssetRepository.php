<?php

namespace App\Repositories;

use App\Models\User_vehicle;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class AssetRepository {
	
	/**
	 * @var App\Models\asset
	 */
	protected $db_asset;
		
    public function __construct(User_vehicle $db_asset) 
    {
        $this->db_asset = $db_asset;
    }
	
	public function addAsset($inputs)
    {
        $db_asset = $this->storeAsset(new $this->db_asset ,  $inputs);
        return $db_asset;
    }
	public function updateAsset($inputs, $id)
	{
		$db_asset = $this->db_asset->findOrFail($id);
		$asset_id = $this->storeAsset($db_asset, $inputs, $id);
		return $db_asset;
	}
	
	function storeAsset($db_asset , $inputs, $id = null)
	{	
		if(isset($inputs['construction_machinary_id']))
			$db_asset->construction_machinary_id = $inputs['construction_machinary_id'];
		if(isset($inputs['vehicle_id']))
			$db_asset->vehicle_id = $inputs['vehicle_id'];
		$db_asset->user_id = Auth::user()->id;
		$db_asset->type = $inputs['type_of_vehicle'];
		$db_asset->quantity = $inputs['quantity'];
		$db_asset->capacity = $inputs['capacity'];
		$db_asset->date_of_entry = $inputs['date_of_entry'];
		$db_asset->registration_number = $inputs['registration_number'];
		$db_asset->meter_reading = $inputs['meter_reading'];
		$db_asset->state = $inputs['state'];
		$db_asset->mark = $inputs['mark'];
		$db_asset->maker = $inputs['maker'];
		$db_asset->series = $inputs['series'];
		$db_asset->other_specifications = $inputs['other_specifications'];
		
		$db_asset->save();
		return $db_asset;
	}
	
	public function getAsset($id = null)
    {
		if($id==null)
		{
			$info_Asset = $this->db_asset->select('id', 'user_id', 'vehicle_id', 'construction_machinary_id', 'type', 'quantity', 'capacity', 'date_of_entry', 'registration_number', 'meter_reading', 'state', 'mark', 'maker', 'series', 'other_specifications')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Asset = $this->db_asset->select('id', 'user_id', 'vehicle_id', 'construction_machinary_id', 'type', 'quantity', 'capacity', 'date_of_entry', 'registration_number', 'meter_reading', 'state', 'mark', 'maker', 'series', 'other_specifications')->findOrFail($id);
		}
        return $info_Asset;
    }
	
}

