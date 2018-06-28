<?php 

	class ReportsController extends BaseController{

		public $layout = 'default';

		function get_index(){
			$report_year = '2017';
			#SELECT * FROM `national_consolidated` WHERE `period_year` = '$report_year' !!IMPORTANT check for ELOQUENT ORM!! 
			$results = Reports::where('period_year',$report_year)->get();
			#dd($results);
			$this->layout->content = View::make('reports.index')
									->withResults($results)
									->withReportYear($report_year);
		}

		function create(){

			$regions = Region::all()->lists('region','region_id'); 	#selecting list of region to display in this page
			array_unshift($regions,'--- Select Region ---');		#display a 'Select Region' at the first row

			$this->layout->content = View::make('reports.create')
									->withRegions($regions);
		}

		public function store()
		{
			#set validations
			$messages = array(
			    'alpha_spaces' => 'The :attribute must only contain letters and spaces.',
			);
			
			$validation = Validator::make(Input::all(),[
				'region'  	=> 'required',
				'facility'	=> 'required|Min:10|Max:80|alpha_spaces',
				'donation' 	=> 'required|integer',
				'voluntary' => 'required|integer',
				'replacement' => 'required|integer',
				'paid' 		=> 'required|integer',
				'first_time' => 'required|integer',
				'repeat' 	=> 'required|integer',
				'owner' 	=> 'required',
				'period_year' 		=> 'required|date_format:Y'
			],$messages);

			#if validation fails
			if($validation->fails()){
				return Redirect::to('reports/create')->withErrors($validation)->withInput();
			}

			$reports = new Reports();
			$reports->region_id = Input::get('region');
			$reports->bsf = Input::get('facility');
			$reports->total_donation = Input::get('donation');
			$reports->voluntary = Input::get('voluntary');
			$reports->replacement = Input::get('replacement');
			$reports->paid = Input::get('paid');
			$reports->first_time = Input::get('first_time');
			$reports->repeat_donor = Input::get('repeat');
			$reports->owner = Input::get('owner');
			$reports->period_year = Input::get('period_year');
			$reports->created_at = Carbon\Carbon::now();
			$reports->updated_at = Carbon\Carbon::now();
			$reports->disable_flag = '0';
			$reports->save();

			return Redirect::to('reports/create/')
				->withMessages('<span class="glyphicon glyphicon-ok text-success"></span> 
					'.($reports->bsf).' New record has been successfully Added!');
		}

		function pie_national($report_year){
			#GETTING THE SUM OF VOLUNTAY, REPLACEMENT and PAID DONATIONS under NATIONAL
			$query = "SELECT SUM(voluntary) as `VOLUNTARY`, SUM(replacement) as `REPLACEMENT`, SUM(paid) as `PAID` 
			FROM national_consolidated WHERE disable_flag = 0 AND period_year = '$report_year' ";


			$result = DB::SELECT(DB::RAW($query))[0];
			return Response::json($result);
		}

		function pie_doh($report_year){

			#GETTING THE SUM OF VOLUNTAY, REPLACEMENT and PAID DONATIONS under DOH
			$query = "SELECT SUM(voluntary) as `VOLUNTARY`, SUM(replacement) as `REPLACEMENT`, SUM(paid) as `PAID` 
			FROM national_consolidated WHERE `owner` = 'DOH ' AND disable_flag = 0 AND period_year = '$report_year'";


			$result = DB::SELECT(DB::RAW($query))[0];
			return Response::json($result);
		}

		function pie_lgu($report_year){

			#GETTING THE SUM OF VOLUNTAY, REPLACEMENT and PAID DONATIONS under LGU
			$query = "SELECT SUM(voluntary) as `VOLUNTARY`, SUM(replacement) as `REPLACEMENT`, SUM(paid) as `PAID` 
			FROM national_consolidated WHERE `owner` = 'LGU ' AND disable_flag = 0 AND period_year = '$report_year'";


			$result = DB::SELECT(DB::RAW($query))[0];
			return Response::json($result);
		}

		function pie_priv($report_year){


			#GETTING THE SUM OF VOLUNTAY, REPLACEMENT and PAID DONATIONS under PRIV
			$query = "SELECT SUM(voluntary) as `VOLUNTARY`, SUM(replacement) as `REPLACEMENT`, SUM(paid) as `PAID` 
			FROM national_consolidated WHERE `owner` = 'PRIV ' AND disable_flag = 0 AND period_year = '$report_year'";


			$result = DB::SELECT(DB::RAW($query))[0];
			return Response::json($result);
		}

		function pie_prc($report_year){

			#GETTING THE SUM OF VOLUNTAY, REPLACEMENT and PAID DONATIONS under PRC
			$query = "SELECT SUM(voluntary) as `VOLUNTARY`, SUM(replacement) as `REPLACEMENT`, SUM(paid) as `PAID` 
			FROM national_consolidated WHERE `owner` = 'PRC ' AND disable_flag = 0 AND  period_year = '$report_year'";


			$result = DB::SELECT(DB::RAW($query))[0];
			return Response::json($result);
		}


		function pie_overall($report_year){
			#GETTING THE SUM OF TOTAL_DONATION PER OWNERSHIP
			$query = 	"SELECT owner as `OWNER`, SUM(total_donation) as `TOTAL` FROM `national_consolidated`
						WHERE `disable_flag` = 0 AND period_year = '$report_year' 
						GROUP by owner";
			$result = DB::SELECT(DB::RAW($query));
			$total = 0;
			foreach($result as 	$row){
				$total += $row->TOTAL;
			}

			$data = [
					'result' => $result,
					'total' => $total
				];

			return Response::json($data);
		}


		function pie_donors($report_year){

			#GETTING THE SUM OF VOLUNTAY, REPLACEMENT and PAID DONATIONS under PRC
			$query = "SELECT SUM(repeat_donor) as `REPEAT`, SUM(first_time) as `FIRSTTIME` 
			FROM national_consolidated WHERE disable_flag = 0 AND period_year = '$report_year'";


			$result = DB::SELECT(DB::RAW($query))[0];
			return Response::json($result);
		}

		function numberFormat($values){
			number_format($values/1000000 * 100, 2);
			return $values;
		}
	}




 ?>