<?php

	class CustomMigrate{

		static function registerRoutes(){
			Route::get("createBSFTable",function(){
				CustomMigrate::toBsfDetails();
			});

			Route::get('migrate',function(){	
				CustomMigrate::toNewChecklist();
			});

		}

		/*
		*	Used to populate bsf_details table
		*/
		static function toBsfDetails(){
			$regions = Region::all();

			foreach($regions as $region){
				foreach($region->facilities as $facility){
					$new_bsf_id = CustomMigrate::generateNewBsfID($facility);
					$bsf = new Bsf();
					$bsf->id = $new_bsf_id;
					$bsf->name = $facility->BSF;
					$bsf->region_id = $facility->REGION;
					$bsf->save();
				}
			}
		}

		/*
		CREATE A FUNCTION THAT WILL UPDATE THE ID ON THE BSF CHECKLIST
		*/
		

		static function generateNewBsfID($facility,$increment = 0){
			$bsf_already_saved = Bsf::where("region_id",$facility->REGION)->get();
			$last_index = $bsf_already_saved->count() + $increment;
			$region_id = CustomMigrate::addLeadingZeros(4,$facility->REGION);
			$new_bsf_id = $region_id.'-'.CustomMigrate::addLeadingZeros(3,(1 + $last_index));

			$isExisting = Bsf::find($new_bsf_id);
			if(!$isExisting == null){
				return generateNewBsfID($facility,$increment++);
			}
			return $new_bsf_id;
		}

		static function addLeadingZeros($length,$str){
			while($length > strlen($str)){
				$str = "0".$str;
			}
			return $str;
		}


		/*
		*	Used to migrate bsf_checklist(old) to checklist(new)
		*/
		static function toNewChecklist(){

			$checklists = Checklist::all();

			foreach($checklists as $checklist){
				$checklist = $checklist->toArray();
				$cl = [];
				foreach($checklist as $i => $v){
					if($i == '2010'){
						$cl['a'] = $v;
					}else if($i == '2011'){
						$cl['b'] = $v;
					}else if($i == '2012'){
						$cl['c'] = $v;
					}else if($i == '2013'){
						$cl['d'] = $v;
					}else if($i == '2014'){
						$cl['e'] = $v;
					}else{
						$cl[$i] = $v;
					}

				}

				
				// 2010
				$new = new NewChecklist();
				$new->BSF = $cl['BSF'];
				$new->REGION = $cl['REGION'];
				$new->YEAR = 2010;
				$new->HAS_REPORTED = $cl['a'];
				$new->save();

				// 2011
				$new = new NewChecklist();
				$new->BSF = $cl['BSF'];
				$new->REGION = $cl['REGION'];
				$new->YEAR = 2011;
				$new->HAS_REPORTED = $cl['b'];
				$new->save();


				// 2012
				$new = new NewChecklist();
				$new->BSF = $cl['BSF'];
				$new->REGION = $cl['REGION'];
				$new->YEAR = 2012;
				$new->HAS_REPORTED = $cl['c'];
				$new->save();


				// 2013
				$new = new NewChecklist();
				$new->BSF = $cl['BSF'];
				$new->REGION = $cl['REGION'];
				$new->YEAR = 2013;
				$new->HAS_REPORTED = $cl['d'];
				$new->save();


				// 2014
				$new = new NewChecklist();
				$new->BSF = $cl['BSF'];
				$new->REGION = $cl['REGION'];
				$new->YEAR = 2014;
				$new->HAS_REPORTED = $cl['e'];
				$new->save();
				


			}
		}
	}