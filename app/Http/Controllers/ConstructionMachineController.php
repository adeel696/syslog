<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\FareRepository;
use App\Models\City;
use App\Models\Fare;


class ConstructionMachineController extends Controller
{
    public function getFare()
    {
    $Fare= Fare::all();
    return view('construction-machinery', ['Fare' => $Fare])->with('title','My App');;
    }    
}
