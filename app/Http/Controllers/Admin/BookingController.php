<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;
use DataTables;

class BookingController extends Controller
{
    protected $bookingRps;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BookingRepository $bookingRps)
    { 
		$this->middleware('admin');
        $this->bookingRps = $bookingRps;
    }
	
    public function getVehicle()
    {
        return view('admin.booking.vehicle');
    }

    public function getVehicleGrid()
    {
	   $info_Bookings = $this->bookingRps->getBookingByType(1);
	   return Datatables::of($info_Bookings)
		->escapeColumns([])
 		->make(true);
    }
	
	public function getConstructionMachine()
    {
        return view('admin.booking.construction-machine');
    }

    public function getConstructionMachineGrid()
    {
	   $info_Bookings = $this->bookingRps->getBookingByType(2);
	   return Datatables::of($info_Bookings)
		->escapeColumns([])
 		->make(true);
    }
	
	public function getWarehouse()
    {
        return view('admin.booking.warehouse');
    }

    public function getWarehouseGrid()
    {
	   $info_Bookings = $this->bookingRps->getBookingByType(1);
	   return Datatables::of($info_Bookings)
		->escapeColumns([])
 		->make(true);
    }
}
