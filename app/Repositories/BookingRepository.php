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
	
}

