<?php

class BsiController extends \BaseController {

	public $layout = 'default';
	/**
	 * Display a listing of the resource.
	 * GET /bsis
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->content = View::make('Bsi.index');

		/* page view logger */
		$page_id = 2; #bsi
		$loghit = new LogHit();
		$loghit->page_id = $page_id;
		$loghit->hits = 1;
		$loghit->ip_address = Request::getClientIp(true);
		$loghit->dateTime = Carbon\Carbon::now();
		$loghit->save();
		/* page view logger */
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bsis/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bsis
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
			'name'  	=> 'required|alpha_spaces|Min:8|Max:80',
			'facility'	=> 'required|Min:10|Max:80|alpha_spaces',
			'email' 	=> 'required|Between:3,64|Email',
			'contact'	=> 'required|Min:8|Max:30|AlphaDash'
		],$messages);

		#if validation fails
		if($validation->fails()){
			return Redirect::to('bsi')->withErrors($validation)->withInput();
		}


		#log details to the logtrail table
		$dload_trail = new Bsi();
		$dload_trail->seq_num = BsiController::generateNewSequenceNo(); #sequence number
		$dload_trail->FN = Input::get('name');							#full name
		$dload_trail->BSF = Input::get('facility');						#facility
		$dload_trail->EM = Input::get('email');							#email
		$dload_trail->CN = Input::get('contact');						#contact #
		$dload_trail->IP = Request::getClientIp(true);					#user ip address
		$dload_trail->datetime = Carbon\Carbon::now();					#date time now()
		$dload_trail->save();											#insert in the table
		
		# !MUST HAVE A SEQUENCE NUM THAT WILL SERVE AS PRIMARY KEY
		#redirect to this page with seq_num and message
		return Redirect::to('bsi/download/'.$dload_trail->seq_num);
		
	}

	public function get_download($seq_num){
		$regions = Region::all()->lists('region','region'); 			#selecting list of region to display in this page
		array_unshift($regions,'Select Region');						#display a 'Select Region' at the first row
		$this->layout->content = View::make('Bsi.show')->with("seq_num",$seq_num)
			 ->withRegions($regions);

		/* page view logger */
		$page_id = 6; #download/upload
		$loghit = new LogHit();
		$loghit->page_id = $page_id;
		$loghit->hits = 1;
		$loghit->ip_address = Request::getClientIp(true);
		$loghit->dateTime = Carbon\Carbon::now();
		$loghit->save();
		/* page view logger */
	}

	public function post_download($seq_num)
	{
		#set validations
		$validation = Validator::make(Input::all(),[
			'region'  	=> 'required',
			'file'		=> 'required|max:10000'
		]);

		#if validation fails
		if($validation->fails()){
			return Redirect::to('bsi/download/'.$seq_num)->withErrors($validation)->withInput();
		}



		$path = public_path().'/bsiforms/'.Input::get('region');		#destination path .selected region
		$file_name = Input::file('file')->getClientOriginalName();		#file name
		#return $name;

		#move file upload to the destination path
		if(Input::file('file')){
			if(Input::file('file')->move($path, $file_name)){

			}
			else{
				return "Opps! Theres an error in file upload";
			}
		}

		#insert in the bsi forms table
		$bsiform = new Bsiform();
		$bsiform->seq_num = $seq_num;
		$bsiform->file_name = $file_name;
		$bsiform->path = $path;
		$bsiform->DT = Carbon\Carbon::now();
		$bsiform->save();

		return Redirect::to('bsi')
				->withMessage('<span class="glyphicon glyphicon-ok text-success"></span> Your file has been successfully uploaded!');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /bsis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /bsis/{id}/edit
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
	 * PUT /bsis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function destroy($id)
	{
		//
	}

	static function generateNewSequenceNo($i = 1){

		// Generate the new sequence no

		$count = count(Bsi::all());
		$count += $i;

		$new_sequence = self::add_leading_zeros($count,4);

		$check = Bsi::where('seq_num','=',$new_sequence)->first();
		
		if($check != null){
			$i++;
			return self::generateNewSequenceNo($i);
		}

		// Return a new generated number
		return $new_sequence;
	}

	static function add_leading_zeros($str, $len){
		while(strlen($str) < $len){
			$str = '0' .$str;
		}
		return $str;
	}

}