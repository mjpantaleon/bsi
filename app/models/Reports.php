<?php
	class Reports extends Eloquent{

		public $table = "national_consolidated";
		public $primaryKey = "id";
		public $timestamps = false;

		function region(){
			return $this->belongsTo('Region','region_id','region_id');
		}
	}