<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\FareRepository;
use App\Models\City;
use App\Models\Fare;
use DB;

class ConstructionMachineController extends Controller
{
	public function showConstructionMachine()
    {
    	$City= City::all();
		return view('construction-machinery', ['City' => $City ]);
    } 
	
    public function getFare(Request $request)
    {
    	//echo $id;
		$contruction_machinary_id = $request->contruction_machinary_id;
		$fare = DB::table("fares")
		->where("contruction_machinary_id",$contruction_machinary_id)
		->select("fare", "insurances_amount", "loading_price", "offloading_price")
		->First();
		return json_encode($fare);
    }    
}
