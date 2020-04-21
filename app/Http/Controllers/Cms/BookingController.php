<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;
use DataTables;
use Auth;

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
		$this->middleware('auth');
        $this->bookingRps = $bookingRps;
    }
	
    public function getVehicle()
    {
        return view('cms.booking.vehicle');
    }

    public function getVehicleGrid()
    {
       $info_Bookings = $this->bookingRps->getBookingByTypeByUser(1, Auth::User()->id)->get();
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name;
        })
		->editColumn('vehicle_id', function ($info_Bookings) {
			return $info_Bookings->Vehicle()->First()->name;
        })
		->editColumn('place_of_departure_city_id', function ($info_Bookings) {
			return $info_Bookings->Place_of_departure_city()->First()->name;
        })
		->editColumn('place_of_arrival_city_id', function ($info_Bookings) {
			return $info_Bookings->Place_of_arrival_city()->First()->name;
        })
		->editColumn('insurances', function ($info_Bookings) {
			return $info_Bookings->insurances." (Valeur: ".$info_Bookings->value_product.")";
        })
		->editColumn('status', function ($info_Bookings) {
			if($info_Bookings->status == "1")
			{
				return '<select class="form-control changeStatus" data-type="1" data-id="'.$info_Bookings->id.'">
					<option value="1" selected>En attente</option>
					<option value="3">Annuler</option>
				</select>
				';
			}
			if($info_Bookings->status == "21")
			{
				return utf8_encode("Fermé");
			}
			if($info_Bookings->status == "3")
			{
				return "Annuler";
			}
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getConstructionMachine()
    {
        return view('cms.booking.construction-machine');
    }

    public function getConstructionMachineGrid()
    {
       $info_Bookings = $this->bookingRps->getBookingByTypeByUser(2, Auth::User()->id)->get();
	   
	   return Datatables::of($info_Bookings)
	   	->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name;
        })
		->editColumn('contruction_machinary_id', function ($info_Bookings) {
			return $info_Bookings->ConstructionMachine()->First()->name;
        })
		->editColumn('delivery_place_city_id', function ($info_Bookings) {
			if($info_Bookings->delivery_place_city_id != "")
				return $info_Bookings->Delivery_place_city()->First()->name;
			else
				return "";
        })
		->editColumn('status', function ($info_Bookings) {
			if($info_Bookings->status == "1")
			{
				return '<select class="form-control changeStatus" data-type="2" data-id="'.$info_Bookings->id.'">
					<option value="1" selected>En attente</option>
					<option value="3">Annuler</option>
				</select>
				';
			}
			if($info_Bookings->status == "21")
			{
				return utf8_encode("Fermé");
			}
			if($info_Bookings->status == "3")
			{
				return "Annuler";
			}
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getWarehouse()
    {
        return view('cms.booking.warehouse');
    }

    public function getWarehouseGrid()
    {
       $info_Bookings = $this->bookingRps->getBookingByTypeByUser(3, Auth::User()->id)->get();
	   return Datatables::of($info_Bookings)
		->editColumn('user_id', function ($info_Bookings) {
			return $info_Bookings->User()->First()->name;
        })
		->editColumn('city_id', function ($info_Bookings) {
			return $info_Bookings->City()->First()->name;
        })
		->editColumn('status', function ($info_Bookings) {
			if($info_Bookings->status == "1")
			{
				return '<select class="form-control changeStatus" data-type="3" data-id="'.$info_Bookings->id.'">
					<option value="1" selected>En attente</option>
					<option value="3">Annuler</option>
				</select>
				';
			}
			if($info_Bookings->status == "21")
			{
				return utf8_encode("Fermé");
			}
			if($info_Bookings->status == "3")
			{
				return "Annuler";
			}
        })
		->escapeColumns([])
 		->make(true);
    }
	
	public function getBulkBuy()
    {
        return view('cms.booking.bulk-buy');
    }

    public function getBulkBuyGrid()
    {
	   $info_UserOffers = $this->bookingRps->getUserOffersByUser(Auth::User()->id);
	   return Datatables::of($info_UserOffers)
	   	->editColumn('user_id', function ($info_UserOffers) {
			return $info_UserOffers->User()->First()->name;
        })
		->editColumn('offer_id', function ($info_UserOffers) {
			return $info_UserOffers->Offer()->First()->title;
        })
		->addColumn('description', function ($info_UserOffers) {
			return $info_UserOffers->Offer()->First()->description;
        })
		->addColumn('status', function ($info_UserOffers) {
			return '<select class="form-control changeStatus" data-type="4" data-id="'.$info_UserOffers->id.'">
					<option value="1" selected>Souscrire</option>
					<option value="3">Annuler</option>
				</select>
				';
        })
		->escapeColumns([])
 		->make(true);
    }
	
	function updateBookingStatus(Request $request)
	{
		$booking_id = $request->booking_id;
		$status = $request->status;
		$type = $request->type;
		$this->bookingRps->updateBookingStatus($type, $booking_id, $status);
		
		return "Ok";
	}
}
