<?php

namespace App\Repositories;

use App\Models\Booking;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class BookingRepository {
	
	/**
	 * @var App\Models\booking
	 */
	protected $db_booking;
		
    public function __construct(Booking $db_booking) 
    {
        $this->db_booking = $db_booking;
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

