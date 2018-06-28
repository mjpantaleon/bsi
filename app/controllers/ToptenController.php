<?php

class ToptenController extends \BaseController {

	public $layout =  'default';
	/**
	 * Display a listing of the resource.
	 * GET /toptens
	 *
	 * @return Response
	 */
	public function index()
	{

		/* page view logger */
		$page_id = 3; #top 10
		$loghit = new LogHit();
		$loghit->page_id = $page_id;
		$loghit->hits = 1;
		$loghit->ip_address = Request::getClientIp(true);
		$loghit->dateTime = Carbon\Carbon::now();
		$loghit->save();
		/* page view logger */

		#select all record from top ten table
		/*$topten = Topten::all();*/

		#SELECT `BSF`, `TD` FROM `top_ten` WHERE `PY` = '2014' ORDER BY `TD` DESC LIMIT 10
		$top2016 = DB::table('top_ten')
				->select('BSF', 'TD')
				->where('PY', '2016')
				->orderBy('TD', 'desc')
				->take(10)
				->get();

		$top2015 = DB::table('top_ten')
				->select('BSF', 'TD')
				->where('PY', '2015')
				->orderBy('TD', 'desc')
				->take(10)
				->get();				#!important

		$top2014 = DB::table('top_ten')
				->select('BSF', 'TD')
				->where('PY', '2014')
				->orderBy('TD', 'desc')
				->take(10)
				->get();				#!important

		$top2013 = DB::table('top_ten')
				->select('BSF', 'TD')
				->where('PY', '2013')
				->orderBy('TD', 'desc')
				->take(10)
				->get();				#!important


		$top2012 = DB::table('top_ten')
				->select('BSF', 'TD')
				->where('PY', '2012')
				->orderBy('TD', 'desc')
				->take(10)
				->get();				#!important


		$top2011 = DB::table('top_ten')
				->select('BSF', 'TD')
				->where('PY', '2011')
				->orderBy('TD', 'desc')
				->take(10)
				->get();				#!important




		$this->layout->content = View::make('Topten.index')
					 ->withTop2016($top2016)	#pass the query
					 ->withTop2015($top2015)	#pass the query
					 ->withTop2014($top2014)	#pass the query
					 ->withTop2013($top2013)	#pass the query
					 ->withTop2012($top2012)	#pass the query
					 ->withTop2011($top2011);	#pass the query
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /toptens/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('TopTen.create');


		/*$regions = Region::all()->lists('region','region'); 			#selecting list of region to display in this page
		array_unshift($regions,'Select Region');						#display a 'Select Region' at the first row
		$this->layout->content = View::make('TopTen.create')
			 ->withRegions($regions);*/
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /toptens
	 *
	 * @return Response
	 */
	public function store()
	{
		#set validations
		$messages = array(
		    'alpha_spaces' => 'The :attribute must only contain letters and spaces.',
		);
		
		$validation = Validator::make(Input::all(),[
			'facility'	=> 'required|Min:10|Max:80|alpha_spaces',
			'donation'	=> 'required|Min:4|Numeric',
		],$messages);

		#if validation fails
		if($validation->fails()){
			return Redirect::to('topten/create/')->withErrors($validation)->withInput();
		}

		$topten = new Topten();
		$topten->BSF = Input::get('facility');
		$topten->TD  = Input::get('donation');
		$topten->PY  = '2016';	#	!!!change period year
		$topten->save();

		return Redirect::to('topten/create/')
				->withMessages('<span class="glyphicon glyphicon-ok text-success"></span> 
					'.($topten->BSF).' New record has been successfully Added!');
	}

	/**
	 * Display the specified resource.
	 * GET /toptens/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /toptens/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /toptens/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /toptens/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}