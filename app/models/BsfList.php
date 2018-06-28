<?php

	class BsfList extends Eloquent{

		public $table = 'bsf_details';
		public $primaryKey = 'id';
		public $timestamps = false;


		function region(){
			return $this->belongsTo('Region','region_id','region_id');
		}
	}