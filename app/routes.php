<?php



// CustomMigrate::registerRoutes();

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
#Testing the getIp to display the user ip address
/*Route::get('getip', function(){
	$ips = Request::getClientIp(true);  #Getting the userIP
	$ips = Carbon\Carbon::now(); #getting the current dateTime with Timezone = 'Asia/Manila'
	dd($ips);
});*/

Route::resource('logs', 'LogsController');
Route::controller('logs', 'LogsController');

Route::resource('reports', 'ReportsController');
Route::controller('reports', 'ReportsController');

Route::get("pie_national/{report_year}" , "ReportsController@pie_national");
Route::get("pie_doh/{report_year}" , "ReportsController@pie_doh");
Route::get("pie_lgu/{report_year}" , "ReportsController@pie_lgu");
Route::get("pie_priv/{report_year}" , "ReportsController@pie_priv");
Route::get("pie_prc/{report_year}" , "ReportsController@pie_prc");
Route::get("pie_donors/{report_year}" , "ReportsController@pie_donors");
Route::get("pie_overall/{report_year}" , "ReportsController@pie_overall");




Route::controller('bsflist', 'BsfListController');
Route::resource('bsflist', 'BsfListController');

Route::resource('leadbsf', 'LeadBsfController');
Route::controller('checklist', 'ChecklistsController');
Route::resource('checklist', 'ChecklistsController');
Route::resource('topten', 'ToptenController');

Route::controller('bsi','BsiController');
Route::resource('bsi','BsiController');

Route::controller('/','HomeController');


/* ADDED VALIDATION */
Validator::extend('alpha_spaces', function($attribute, $value)
{
 // return preg_match('/^[\pL\s]+$/u', $value);
 return preg_match('/^[a-z0-9 .\-,]+$/i', $value);
});

