<?php


	class BsfListController extends BaseController{


		public $layout = 'temp';



		function index(){
			#SELECT `REGION`, `region_id` FROM `region` ORDER BY `REGION` ASC
			$regions = DB::table('region')
					 ->select('region_id', 'region')
					 ->get();

			$this->layout->content = View::make('bsfList.index')
										->withRegions($regions);
		}

		public function get_list($region_id){
			$region = Region::find($region_id);

			$list = $region->bsflist;
			$this->layout->content = View::make('bsfList.show')
										->withRegion($region)
										->withList($list);			
		}

		public function get_view($id){
			$bsf = BsfList::find($id);
			$this->layout->content = View::make('bsfList.view')
										->withBsf($bsf);
		}


		/* EDIT BSF DETAILS */

		public function get_edit($id){
			$bsf = BsfList::find($id);
			$this->layout->content = View::make('bsfList.edit')
										->withBsf($bsf);
		}

		public function put_edit($id){
			
			#Message Prompt
			$messages = array(
			    'alpha_spaces' => 'The :attribute must only contain letters and spaces.',
			);

			#SET VALIDATIONS
			$validations = Validator::make(Input::all(), [
				'address' => 'required|alpha_spaces|Min:15',
				'contact_no' => 'required|Min:8|Max:30',
				'email' => 'Between:3,64|Email',
				'head' => 'required|alpha_spaces|Min:8',
				'class' => 'required',
				'owner' => 'required',
				'type' => 'required'
			],$messages);

			#if validation fails
			if($validations->fails()){
				return Redirect::to('bsflist/edit/'.$id)->withErrors($validations)->withInput();
			}

			#UPDATE DETAILS
			$bsf_details = BsfList::find($id);
			$bsf_details->address = Input::get('address');
			$bsf_details->contact_no = Input::get('contact_no');
			$bsf_details->fax_no = Input::get('fax_no');
			$bsf_details->email = Input::get('email');
			$bsf_details->head = Input::get('head');
			$bsf_details->class = Input::get('class');
			$bsf_details->owner = Input::get('owner');
			$bsf_details->type = Input::get('type');
			$bsf_details->save();

			#REDIRECT ONCE SUCCESSFULL
			return Redirect::to('bsflist/list/'.$bsf_details->region_id)
							->withMessage('<span class="glyphicon glyphicon-ok text-success"></span> 
								BSF details has been successfully updated!');

		}

		/* EDIT BSF DETAILS */

		/* ADDING NEW BSF */

		public function get_add(){
			#1st param(DISPLAY), 1nd param('VALUE')
			$regions = Region::all()->lists('region','region_id'); 			#selecting list of region to display in this page
			array_unshift($regions,'Select Region');						#display a 'Select Region' at the first row
			$this->layout->content = View::make('bsfList.add')
										->withRegions($regions);
		}

		public function post_add(){
			#Message Prompt
			$messages = array(
			    'alpha_spaces' => 'The :attribute must only contain letters and spaces.',
			);

			#SET VALIDATIONS
			$validations = Validator::make(Input::all(), [
				'facility' => 'required|alpha_spaces|Min:15',
				'region' => 'required',
				'address' => 'required|alpha_spaces|Min:15',
				'contact_no' => 'required|Min:8|Max:30',
				'email' => 'required|Between:3,64|Email',
				'head' => 'required|alpha_spaces|Min:8',
				'class' => 'required',
				'owner' => 'required',
				'type' => 'required'
			],$messages);

			#if validation fails
			if($validations->fails()){
				return Redirect::to('bsflist/add')->withErrors($validations)->withInput();
			}

			#INSERT IN BSFLIST TABLE
			$new_bsf = new BsfList();
			/*$new_bsf->id = BsfListController::generateID($facility);*/ 	#Generate bsf_id ('XXXX-XXXX') !!Region ID - Sequence Number
			$new_bsf->name = Str::upper(Input::get('facility')); 			#Set any input into Upper case Str::upper()
			$new_bsf->region_id = Input::get('region');						#
			$new_bsf->address = Input::get('address');
			$new_bsf->contact_no = Input::get('contact_no');
			$new_bsf->fax_no = Input::get('fax_no');
			$new_bsf->email = Input::get('email');
			$new_bsf->head = Input::get('head');
			$new_bsf->class = Input::get('class');
			$new_bsf->owner = Input::get('owner');
			$new_bsf->type = Input::get('type');
			$new_bsf->save();

			#WE NEED TO SAVE IT ALSO IN THE TOP TEN TABLE

			return Redirect::to('bsflist')
							->withMessage('<span class="glyphicon glyphicon-ok text-success"></span> 
								New BSF has been successfully added!');
			#REDIRRECT THEN PROMPT MESSAGE
		}
		/* ADDING NEW BSF */


	}
	//END BsfListController