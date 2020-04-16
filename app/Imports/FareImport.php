<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Vehicle;
use App\Models\ConstructionMachine;
use App\Models\City;
use App\Models\Fare;
 
class FareImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {	
		$info_Vehicles = Vehicle::All();
		$info_ConstructionMachines = ConstructionMachine::All();
		$info_Cities = City::All();
		//dd($rows);
		foreach ($rows as $row) 
        {
			if($row['type'] == "Vehicles")
			{
				$vehicle_id=0;
				$from_city=0;
				$to_city=0;
				
				$info_Vehicle = $info_Vehicles->where('name',$row['name'])->First();
				if($info_Vehicle)
					$vehicle_id = $info_Vehicle->id;
				
				$info_FromCity = $info_Cities->where('name',$row['from_city'])->First();
				if($info_FromCity)
					$from_city = $info_FromCity->id;
				
				$info_ToCity = $info_Cities->where('name',$row['to_city'])->First();
				if($info_ToCity)
					$to_city = $info_ToCity->id;
				
				//dd($info_Cities);
				
				if($vehicle_id!=0 && $from_city!=0 && $to_city!=0)
				{
					$db_fare = Fare::Where('vehicle_id', $vehicle_id)->Where('from_city', $from_city)->Where('to_city', $to_city)->First();
					
					if(!$db_fare)
					{
						$db_fare = new Fare;
					}
					
					$db_fare->vehicle_id = $vehicle_id;
					$db_fare->type_of_vehicle = 1;
					$db_fare->from_city = $from_city;
					$db_fare->to_city = $to_city;
					$db_fare->capacity = $row['capacity'];
					$db_fare->insurances_amount = $row['insurances'];
					$db_fare->loading_price = $row['loading'];
					$db_fare->offloading_price = $row['offloading'];
					$db_fare->fare = $row['fare'];
					$db_fare->save();
				}
				
			}
			else
			if($row['type'] == "Construction Machines")
			{
				$contruction_machinary_id=0;
				
				$info_ConstructionMachine = $info_ConstructionMachines->where('name',$row['name'])->First();
				if($info_ConstructionMachine)
					$contruction_machinary_id = $info_ConstructionMachine->id;
					
				if($contruction_machinary_id!=0)
				{
					$db_fare = Fare::Where('contruction_machinary_id', $contruction_machinary_id)->First();
					
					if(!$db_fare)
					{
						$db_fare = new Fare;
					}
					
					$db_fare->contruction_machinary_id = $contruction_machinary_id;
					$db_fare->type_of_vehicle = 2;
					$db_fare->capacity = $row['capacity'];
					$db_fare->insurances_amount = $row['insurances'];
					$db_fare->loading_price = $row['loading'];
					$db_fare->offloading_price = $row['offloading'];
					$db_fare->fare = $row['fare'];
					$db_fare->save();
					
				}
			}

		}
		
    }
}
