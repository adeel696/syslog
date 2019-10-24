<?php

namespace App\Repositories;

use App\Models\Suburb;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class SuburbRepository {
	
	/**
	 * @var App\Models\suburb
	 */
	protected $db_suburb;
		
    public function __construct(Suburb $db_suburb) 
    {
        $this->db_suburb = $db_suburb;
    }
	
	public function addSuburb($inputs)
    {
        $db_suburb = $this->storeSuburb(new $this->db_suburb ,  $inputs);
        return $db_suburb;
    }
	public function updateSuburb($inputs, $id)
	{
		$db_suburb = $this->db_suburb->findOrFail($id);
		$suburb_id = $this->storeSuburb($db_suburb, $inputs, $id);
		return $db_suburb;
	}
	
	function storeSuburb($db_suburb , $inputs, $id = null)
	{	
		$db_suburb->name = $inputs['name'];
        $db_suburb->city_id = $inputs['city_id'];
		$db_suburb->save();
		return $db_suburb;
	}
	
	public function getSuburb($id = null)
    {
		if($id==null)
		{
			$info_Suburb = $this->db_suburb->select('id', 'name','city_id')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Suburb = $this->db_suburb->select('id', 'name','city_id')->findOrFail($id);
		}
        return $info_Suburb;
    }
	
}

