<?php

namespace App\Repositories;

use App\Models\Packaging;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class PackagingRepository {
	
	/**
	 * @var App\Models\packaging
	 */
	protected $db_packaging;
		
    public function __construct(Packaging $db_packaging) 
    {
        $this->db_packaging = $db_packaging;
    }
	
	public function addPackaging($inputs)
    {
        $db_packaging = $this->storePackaging(new $this->db_packaging ,  $inputs);
        return $db_packaging;
    }
	public function updatePackaging($inputs, $id)
	{
		$db_packaging = $this->db_packaging->findOrFail($id);
		$packaging_id = $this->storePackaging($db_packaging, $inputs, $id);
		return $db_packaging;
	}
	
	function storePackaging($db_packaging , $inputs, $id = null)
	{	
		$db_packaging->type = $inputs['type'];
        $db_packaging->detail = $inputs['detail'];
		$db_packaging->save();
		return $db_packaging;
	}
	
	public function getPackaging($id = null)
    {
		if($id==null)
		{
			$info_Packaging = $this->db_packaging->select('id', 'type','detail')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_Packaging = $this->db_packaging->select('id', 'type','detail')->findOrFail($id);
		}
        return $info_Packaging;
    }
	
}

