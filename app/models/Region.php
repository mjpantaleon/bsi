<?php
class Region extends Eloquent{

	public $table = 'region';
	public $primaryKey = 'region_id';
	public $timestamps = false;

	#relationship on the checklist
	function facilities(){
		return $this->hasMany('Checklist','REGION','region_id');
	}

	function newChecklists(){
		return $this->hasMany('newChecklist','REGION','region_id')->orderBy('BSF');
	}

	function facilityNames(){
		// $names = NewChecklist::select('BSF','REGION')->where('REGION','=',$this->region_id)->groupBy('BSF')->get();
		// return $names;
		// return $this->hasMany('')
	}

	function bsflist(){
		return $this->hasMany('BsfList', 'region_id', 'region_id');
	}
}