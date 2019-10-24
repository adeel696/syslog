<?php

namespace App\Repositories;

use App\Models\ConstructionMachine;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use DB;


class ConstructionMachineRepository {
	
	/**
	 * @var App\Models\constructionMachine
	 */
	protected $db_constructionMachine;
		
    public function __construct(ConstructionMachine $db_constructionMachine) 
    {
        $this->db_constructionMachine = $db_constructionMachine;
    }
	
	public function getConstructionMachine($id = null)
    {
		if($id==null)
		{
			$info_constructionMachine = $this->db_constructionMachine->select('id', 'name', 'capacity', 'specification')->orderBy('created_at', 'DESC')->get();
		}
		else
		{
			$info_constructionMachine = $this->db_constructionMachine->select('id', 'name', 'capacity', 'specification')->findOrFail($id);
		}
        return $info_constructionMachine;
    }
	
}

