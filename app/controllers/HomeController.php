<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public $layout = 'default';

	function get_index(){
		$this->layout->content = View::make('home.gdbs');

		$page_id = 1; #gdbs
		/* page view logger */
		$loghit = new LogHit();
		$loghit->page_id = $page_id;
		$loghit->hits = 1;
		$loghit->ip_address = Request::getClientIp(true);
		$loghit->dateTime = Carbon\Carbon::now();
		$loghit->save();
		/* page view logger */
	}

}
