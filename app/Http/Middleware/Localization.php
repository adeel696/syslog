<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use Session;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Country;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if(\Session::get('locale')==null)
		{
			if(env('APP_ENV')=='local')
			{
				//$ip='203.135.44.87';
				$ip = $request->ip();
			}
			else
			{
				$ip = $request->ip();
			}
			$jsonIps = json_decode(file_get_contents('https://ipinfo.io/'.$ip));
			/*{
				"ip": "203.135.44.87"
				"city": "Lahore"
				"region": "Punjab"
				"country": "PK"
				"loc": "31.5580,74.3507"
				"org": "AS56167 PTML-PK"
				"postal": "55110"
				"timezone": "Asia/Karachi"
				"readme": "https://ipinfo.io/missingauth"
			}*/
			$locale='fr';
			
			$info_Country=null;
			if(isset($jsonIps->country))
				$info_Country = Country::Where('country_code',$jsonIps->country)->First();
			
			if($info_Country)
			{
				\Session::put('locale', $locale);
				\Session::put('country_id', $info_Country->id);
				\Session::put('country_name', $info_Country->name);
				\Session::put('flag', $info_Country->flag);
				
				view()->share('locale', $locale);
				view()->share('country_id', $info_Country->id);
				view()->share('country_name', $info_Country->name);
				view()->share('flag', $info_Country->flag);
			}
			else
			{
				\Session::put('locale', 'fr');
				\Session::put('country_id', 1);
				\Session::put('country_name', 'Burkina Faso');
				\Session::put('flag', 'Burkina.png');
				
				view()->share('locale', 'fr');
				view()->share('country_id', 1);
				view()->share('country_name', 'Burkina Faso');
				view()->share('flag', 'Burkina.png');
			}
		}
		else
		{
			$locale = \Session::get('locale');
			view()->share('locale', \Session::get('locale'));
			view()->share('country_id', \Session::get('country_id'));
			view()->share('country_name', \Session::get('country_name'));
			view()->share('flag', \Session::get('flag'));
		}
		//app()->setLocale($locale);
		
		return $next($request);
    }
}
