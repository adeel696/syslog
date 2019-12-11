<?php

namespace App\Repositories;

use App\Models\Warehouse_booking;
use App\Models\Vehicle_booking;
use App\Models\User_offer;
use App\Models\ConstructionMachineBooking;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class BookingRepository {
	
	/**
	 * @var App\Models\booking
	 */
	protected $db_warehouse_booking;
	protected $db_vehicle_booking;
	protected $db_user_offer;
	protected $db_construction_machine_booking;
		
    public function __construct(Warehouse_booking $db_warehouse_booking, Vehicle_booking $db_vehicle_booking, User_offer $db_user_offer, ConstructionMachineBooking $db_construction_machine_booking) 
    {
		$this->db_warehouse_booking = $db_warehouse_booking;
		$this->db_vehicle_booking = $db_vehicle_booking;
		$this->db_user_offer = $db_user_offer;
		$this->db_construction_machine_booking = $db_construction_machine_booking;
    }
	
	function storeWarehouseBooking($inputs)
	{
		//dd($inputs);
		$db_warehouse_booking = new $this->db_warehouse_booking;
		$db_warehouse_booking->packaging = $inputs['packaging'];
		$db_warehouse_booking->weight = $inputs['weight'];
		$db_warehouse_booking->volume = $inputs['volume'];
		$db_warehouse_booking->needed_space = $inputs['needed_space'];
		$db_warehouse_booking->preferences = $inputs['preferences'];
		if(isset($inputs['preference_text']))
			$db_warehouse_booking->preference_text = $inputs['preference_text'];
		if(isset($inputs['city_id']))
			$db_warehouse_booking->city_id = $inputs['city_id'];
		$db_warehouse_booking->user_id = $inputs['user_id'];
		if(isset($inputs['amount']))
			$db_warehouse_booking->amount = $inputs['amount'];
		if(isset($inputs['description']))
			$db_warehouse_booking->description = $inputs['description'];
		$db_warehouse_booking->status = $inputs['status'];
		$db_warehouse_booking->save();
		return $db_warehouse_booking;
	}

	function storeVehicleBooking($inputs)
	{
		//dd($inputs);
		$db_vehicle_booking = new $this->db_vehicle_booking;
		$db_vehicle_booking->vehicle_id = $inputs['vehicle_id'];
		$db_vehicle_booking->place_of_departure_city_id = $inputs['to_city'];
		$db_vehicle_booking->place_of_arrival_city_id = $inputs['from_city'];
		$db_vehicle_booking->capacity = isset($inputs['capacity']) ? $inputs['capacity'] : '';
		if(isset($inputs['preferences']))
			$db_vehicle_booking->preferences = $inputs['preferences'];
		if(isset($inputs['specifications']))
		$db_vehicle_booking->specifications = $inputs['specifications'];
		if(isset($inputs['number_of_seats']))
			$db_vehicle_booking->number_of_seats = $inputs['number_of_seats'];
		if(isset($inputs['duration']))
			$db_vehicle_booking->duration = $inputs['duration'];
		if(isset($inputs['others']))
			$db_vehicle_booking->others = $inputs['others'];
		if(isset($inputs['insurances']))
			$db_vehicle_booking->insurances = ($inputs['insurances'] == "on") ? "Yes" : "";
		if(isset($inputs['value_product']))
			$db_vehicle_booking->value_product = ($inputs['value_product']/100)*1.2;
		if(isset($inputs['loading']))
			$db_vehicle_booking->loading = ($inputs['loading'] == "on") ? "Yes" : "";
		if(isset($inputs['offloading']))
			$db_vehicle_booking->offloading = ($inputs['offloading'] == "on") ? "Yes" : "";
		$db_vehicle_booking->user_id = $inputs['user_id'];
		if(isset($inputs['amount']))
			$db_vehicle_booking->amount = $inputs['amount'];
		if(isset($inputs['description']))
			$db_vehicle_booking->description = $inputs['description'];
		$db_vehicle_booking->status = $inputs['status'];
		$db_vehicle_booking->save();
		return $db_vehicle_booking;
	}
	
	function storeConstructionMachineBooking($inputs)
	{
		//dd($inputs);
		$db_construction_machine_booking = new $this->db_construction_machine_booking;
		$db_construction_machine_booking->contruction_machinary_id = $inputs['contruction_machinary_id'];
		$db_construction_machine_booking->type_of_machinery = $inputs['type_of_machinery'];
		if(isset($inputs['specification']))
			$db_construction_machine_booking->specification = $inputs['specification'];
		$db_construction_machine_booking->delivery_deadline = $inputs['delivery_deadline'];
		$db_construction_machine_booking->preferences = $inputs['preferences'];
		if(isset($inputs['duration_of_user']))
			$db_construction_machine_booking->duration_of_user = $inputs['duration_of_user'];
		if(isset($inputs['others']))
			$db_construction_machine_booking->others = $inputs['others'];
		if(isset($inputs['delivery_place_city_id']))
			$db_construction_machine_booking->delivery_place_city_id = $inputs['delivery_place_city_id'];
		$db_construction_machine_booking->user_id = $inputs['user_id'];
		if(isset($inputs['amount']))
			$db_construction_machine_booking->amount = $inputs['amount'];
		if(isset($inputs['description']))
			$db_construction_machine_booking->description = $inputs['description'];
		$db_construction_machine_booking->status = $inputs['status'];
		$db_construction_machine_booking->save();
		return $db_construction_machine_booking;
	}

	function storeSubscriber($inputs)
	{	
		$db_user_offer = new $this->db_user_offer;
        $db_user_offer->user_id = $inputs['user_id'];
        $db_user_offer->offer_id = $inputs['offer_id'];
		$db_user_offer->save();
		return $db_user_offer;
	}
	
	public function getBookingByType($type)
    {
		switch($type)
		{
			case "1":
				$info_Booking = $this->db_vehicle_booking->orderBy('created_at', 'DESC');
			break;
			case "2":
				$info_Booking = $this->db_construction_machine_booking->orderBy('created_at', 'DESC');
			break;
			case "3":
				$info_Booking = $this->db_warehouse_booking->orderBy('created_at', 'DESC');
			break;
		}
		
        return $info_Booking;
    }
	
	public function getBookingByTypeByUser($type, $user_id)
    {
		switch($type)
		{
			case "1":
				$info_Booking = $this->db_vehicle_booking->where('user_id',$user_id)->orderBy('created_at', 'DESC');
			break;
			case "2":
				$info_Booking = $this->db_construction_machine_booking->where('user_id',$user_id)->orderBy('created_at', 'DESC');
			break;
			case "3":
				$info_Booking = $this->db_warehouse_booking->where('user_id',$user_id)->orderBy('created_at', 'DESC');
			break;
		}
        return $info_Booking;
    }
	
	public function getUserOffers()
    {
		$info_Booking = $this->db_user_offer->select('id', 'user_id','offer_id', 'created_at', 'updated_at')->orderBy('created_at', 'DESC')->get();
        return $info_Booking;
    }
	
	public function getUserOffersByUser($user_id)
    {
		$info_Booking = $this->db_booking->select('id', 'user_id','offer_id', 'created_at', 'updated_at')->where('type',$type)->orderBy('created_at', 'DESC')->get();
        return $info_Booking;
    }
	
	
}

