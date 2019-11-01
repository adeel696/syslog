<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\Warehouse_booking;
use App\Models\Vehicle_booking;
use App\Models\User_offer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class BookingRepository {
	
	/**
	 * @var App\Models\booking
	 */
	protected $db_booking;
	protected $db_warehouse_booking;
	protected $db_vehicle_booking;
	protected $db_user_offer;
		
    public function __construct(Booking $db_booking, Warehouse_booking $db_warehouse_booking, Vehicle_booking $db_vehicle_booking, User_offer $db_user_offer) 
    {
        $this->db_booking = $db_booking;
		$this->db_warehouse_booking = $db_warehouse_booking;
		$this->db_vehicle_booking = $db_vehicle_booking;
		$this->db_user_offer = $db_user_offer;
    }
	
	function storeBooking($inputs)
	{	
		$db_booking = new $this->db_booking;
        $db_booking->user_id = $inputs['user_id'];
        $db_booking->type = $inputs['type'];
		if(isset($inputs['amount']))
			$db_booking->amount = $inputs['amount'];
		if(isset($inputs['description']))
			$db_booking->description = $inputs['description'];
		$db_booking->status = $inputs['status'];
		$db_booking->save();
		return $db_booking;
	}
	
	function storeWarehouseBooking($inputs)
	{
		//dd($inputs);
		$db_warehouse_booking = new $this->db_warehouse_booking;
        $db_warehouse_booking->booking_id = $inputs['booking_id'];
		$db_warehouse_booking->packaging = $inputs['packaging'];
		$db_warehouse_booking->weight = $inputs['weight'];
		$db_warehouse_booking->volume = $inputs['volume'];
		$db_warehouse_booking->needed_space = $inputs['needed_space'];
		$db_warehouse_booking->preferences = $inputs['preferences'];
		if(isset($inputs['preference_text']))
			$db_warehouse_booking->preference_text = $inputs['preference_text'];
		if(isset($inputs['city_id']))
			$db_warehouse_booking->city_id = $inputs['city_id'];
		$db_warehouse_booking->save();
		return $db_warehouse_booking;
	}

	function storeVehicleBooking($inputs)
	{
		//dd($inputs);
		$db_vehicle_booking = new $this->db_vehicle_booking;
        $db_vehicle_booking->booking_id = $inputs['booking_id'];
		$db_vehicle_booking->place_of_departure_city_id = $inputs['to_city'];
		$db_vehicle_booking->place_of_arrival_city_id = $inputs['from_city'];
		$db_vehicle_booking->capacity = $inputs['capacity'];
		$db_vehicle_booking->preferences = $inputs['preferences'];
		if(isset($inputs['specifications']))
		$db_vehicle_booking->specifications = $inputs['specifications'];
		if(isset($inputs['capacity_type']))
			$db_vehicle_booking->capacity_type = $inputs['capacity_type'];
		if(isset($inputs['number_of_seats']))
			$db_vehicle_booking->number_of_seats = $inputs['number_of_seats'];
		if(isset($inputs['duration']))
			$db_vehicle_booking->duration = $inputs['duration'];
		if(isset($inputs['others']))
			$db_vehicle_booking->others = $inputs['others'];
		if(isset($inputs['insurances']))
			$db_vehicle_booking->insurances = $inputs['insurances'];
		if(isset($inputs['loading']))
			$db_vehicle_booking->loading = $inputs['loading'];
		if(isset($inputs['offloading']))
			$db_vehicle_booking->offloading = $inputs['offloading'];
		$db_vehicle_booking->save();
		return $db_vehicle_booking;
	}
	
	public function getBooking($id = null)
    {
		if($id==null)
		{
			$info_Booking = $this->db_booking->select('id', 'user_id','type','amount','description','status', 'create_at', 'updated_at')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Booking = $this->db_booking->select('id', 'user_id','type','amount','description','status', 'create_at', 'updated_at')->findOrFail($id);
		}
        return $info_Booking;
    }
	
	public function getBookingByType($type)
    {
		$info_Booking = $this->db_booking->select('id', 'user_id','type','amount','description','status', 'created_at', 'updated_at')->where('type',$type)->orderBy('created_at', 'DESC')->get();
        return $info_Booking;
    }
	
	public function getBookingByTypeByUser($type, $user_id)
    {
		$info_Booking = $this->db_booking->select('id', 'user_id','type','amount','description','status', 'created_at', 'updated_at')->where('type',$type)->where('user_id',$user_id)->orderBy('created_at', 'DESC')->get();
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

