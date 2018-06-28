<?php
	
	class LogsController extends BaseController {
		public $layout = 'default2';

		public function index(){
			#get download history
			$downloads = DB::table('bsi_dload_trail')
						->select('seq_num', 'FN', 'BSF', 'CN', 'EM', 'dateTime')
						->orderBy('dateTime', 'DESC')
						->get();
			$uploads = DB::table('bsiforms')
						->select('seq_num','file_name','DT')
						->orderBy('DT','DESC')
						->get();
			#dd($downloads);

			$this->layout->content =  View::make('logs.index')
									->withDownloads($downloads)
									->withUploads($uploads);
		}
	}



?>