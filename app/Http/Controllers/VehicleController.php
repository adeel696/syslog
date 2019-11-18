<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use DB;

class VehicleController extends Controller
{
    public function showVehicle()
    {
    	$City= City::all();
    	return view('vehicle', ['City' => $City]);
    }  

    public function getFare(Request $request) {
        //echo $id;
		$vehicle_id = $request->vehicle_id;
		$to_city =$request->to_city;
		$from_city = $request->from_city;
			$fare = DB::table("fares")
			->where("vehicle_id",$vehicle_id)
			->where("to_city",$to_city)
			->where("from_city",$from_city)
			->select("fare", "insurances_amount", "loading_price", "offloading_price")
			->First();
		return json_encode($fare);
	}
}
