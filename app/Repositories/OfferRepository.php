<?php

namespace App\Repositories;

use App\Models\Offer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Repositories\ImageRepository;
use DB;


class OfferRepository {
	
	/**
	 * @var App\Models\offer
	 */
	protected $db_offer;
	protected $imageRps;
		
    public function __construct(Offer $db_offer, ImageRepository $imageRps) 
    {
        $this->db_offer = $db_offer;
		$this->imageRps = $imageRps;
    }
	
	public function addOffer($inputs)
    {
        $db_offer = $this->storeOffer(new $this->db_offer ,  $inputs);
        return $db_offer;
    }
	
	public function updateOffer($inputs, $id)
	{
		$db_offer = $this->db_offer->findOrFail($id);
		$offer_id = $this->storeOffer($db_offer, $inputs, $id);
		return $db_offer;
	}
	
	public function deleteOffer($db_offer)
    {
		$this->imageRps->delete($db_offer->image, '/media/offers/', '500', '500');
        $db_offer->delete();
    }
	
	function storeOffer($db_offer , $inputs, $id = null)
	{	
		$imageName = "";
		if($id == null)
		{
			if(isset($inputs['image']))
				$imageName = $this->imageRps->upload($inputs['image'], '/media/offers/', '500', '500');
		}
		else
		{
			if(isset($inputs['image']))
			{
				$this->imageRps->delete($db_offer->image, '/media/offers/', '500', '500');
				$imageName = $this->imageRps->upload($inputs['image'], '/media/offers/', '500', '500');
			}
		}
		$db_offer->title = (isset($inputs['title']) ? $inputs['title'] : "");	
		$db_offer->description  = (isset($inputs['description']) ? $inputs['description'] : "");
		$db_offer->image = $imageName;
		$db_offer->type  = (isset($inputs['type']) ? $inputs['type'] : "");
		$db_offer->insurance_type = (isset($inputs['insurance_type']) ? $inputs['insurance_type'] : "");
		$db_offer->range_of_age_of_vehicule = (isset($inputs['range_of_age_of_vehicule']) ? $inputs['range_of_age_of_vehicule'] : "");
		$db_offer->value_of_vehicle = (isset($inputs['value_of_vehicle']) ? $inputs['value_of_vehicle'] : "");
		$db_offer->power = (isset($inputs['power']) ? $inputs['power'] : "");
		$db_offer->designation = (isset($inputs['designation']) ? $inputs['designation'] : "");
		$db_offer->packaging = (isset($inputs['packaging']) ? $inputs['packaging'] : "");
		$db_offer->caracteristics = (isset($inputs['caracteristics']) ? $inputs['caracteristics'] : "");
		$db_offer->brand = (isset($inputs['brand']) ? $inputs['brand'] : "");
		$db_offer->reference = (isset($inputs['reference']) ? $inputs['reference'] : "");
		$db_offer->others = (isset($inputs['others']) ? $inputs['others'] : "");
		$db_offer->amount = (isset($inputs['amount']) ? $inputs['amount'] : "");
			
		$db_offer->save();
		return $db_offer;
	}
	
	public function getOffer($id = null)
    {
		if($id==null)
		{
			$info_Offer = $this->db_offer->select('id', 'title','description','image','type','insurance_type','range_of_age_of_vehicule','value_of_vehicle','power','designation','packaging','caracteristics','brand','reference','others','amount')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Offer = $this->db_offer->select('id', 'title','description','image','type','insurance_type','range_of_age_of_vehicule','value_of_vehicle','power','designation','packaging','caracteristics','brand','reference','others','amount')->findOrFail($id);
		}
        return $info_Offer;
    }
	
}

