<?php 
	
	class LeadBsfController extends BaseController{

		public $layout = 'default';


		public function index(){

			/* page view logger */
			$page_id = 5; #lead BSF
			$loghit = new LogHit();
			$loghit->page_id = $page_id;
			$loghit->hits = 1;
			$loghit->ip_address = Request::getClientIp(true);
			$loghit->dateTime = Carbon\Carbon::now();
			$loghit->save();
			/* page view logger */

			#SELECT `BSF` FROM `lead_bsf` WHERE `region` = '01'
			$region1	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '01')
						->orderBy('BSF', 'asc')
						->get();
			$region2	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '02')
						->orderBy('BSF', 'asc')
						->get();
			$region3	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '03')
						->orderBy('BSF', 'asc')
						->get();
			$region4a	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '04A')
						->orderBy('BSF', 'asc')
						->get();
			$region4b	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '04B')
						->orderBy('BSF', 'asc')
						->get();
			$region5	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '05')
						->orderBy('BSF', 'asc')
						->get();
			$region6	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '06')
						->orderBy('BSF', 'asc')
						->get();
			$region7	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '07')
						->orderBy('BSF', 'asc')
						->get();
			$region8	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '08')
						->orderBy('BSF', 'asc')
						->get();
			$region9	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '09')
						->orderBy('BSF', 'asc')
						->get();
			$region10	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '010')
						->orderBy('BSF', 'asc')
						->get();
			$region11	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '011')
						->orderBy('BSF', 'asc')
						->get();
			$region12	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '012')
						->orderBy('BSF', 'asc')
						->get();
			$caraga	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', '013')
						->orderBy('BSF', 'asc')
						->get();
			$ncr	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', 'NCR')
						->orderBy('BSF', 'asc')
						->get();
			$car	= DB::table('lead_bsf')
						->select('BSF')
						->where('region', 'CAR')
						->orderBy('BSF', 'asc')
						->get();
			

			$this->layout->content = View::make('leadBsf.index')
										->withRegion1($region1)
										->withRegion2($region2)
										->withRegion3($region3)
										->withRegion4a($region4a)
										->withRegion4b($region4b)
										->withRegion5($region5)
										->withRegion6($region6)
										->withRegion7($region7)
										->withRegion8($region8)
										->withRegion9($region9)
										->withRegion10($region10)
										->withRegion11($region11)
										->withRegion12($region12)
										->withCaraga($caraga)
										->withNcr($ncr)
										->withCar($car);
		}
	}




 ?>