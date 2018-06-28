<?php

class ChecklistsController extends \BaseController {

	public $layout = 'default';
	/**
	 * Display a listing of the resource.
	 * GET /checklists
	 *
	 * @return Response
	 */
	public function index()
	{
		/* page view logger */
		$page_id = 4; #checklist
		$loghit = new LogHit();
		$loghit->page_id = $page_id;
		$loghit->hits = 1;
		$loghit->ip_address = Request::getClientIp(true);
		$loghit->dateTime = Carbon\Carbon::now();
		$loghit->save();
		/* page view logger */

		#SELECT `REGION`, `region_id` FROM `region` ORDER BY `REGION` ASC
		$regions = DB::table('region')
				 ->select('region_id', 'region')
				 ->get();

		$this->layout->content = View::make('Checklists.index')
								->withRegions($regions);
	}


	public function get_list($region_id){
		// $facilities = Checklist::where('REGION',$region_id)->get();
		$start_year = 2010;
		$max_year = date('Y') - 1;	#current year minus 1 (2017 - 1 = 2016)

		$region = Region::find($region_id);
		$display = [];
		$i = 0;
		foreach($region->bsflist as $facility){
			$display[$i]['name'] = $facility->name;
			$display[$i]['region'] = $region->region;
			$data  = NewChecklist::where('BSF_ID','=',$facility->id)->get();

			foreach($data as $row){
				$s = $start_year;
				$m = $max_year;
				while($s <= $m){
					if($row->YEAR == $s){
						$display[$i][$s] = $row->HAS_REPORTED;	
					}
					$s++;
				}
			}
			$i++;
		}
		
		$this->layout->content = View::make('Checklists.show')
								->withRegion($region)
								->with('start_year',$start_year)
								->with('max_year',$max_year)
								->withDisplay($display);
	}


	/**
	 * Show the form for creating a new resource.
	 * GET /checklists/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /checklists
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /checklists/{id}
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
	 * GET /checklists/{id}/edit
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
	 * PUT /checklists/{id}
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
	 * DELETE /checklists/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}