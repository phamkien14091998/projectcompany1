<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ScheduleController@index');

// Route::get('/index', 'ScheduleController@getIndex');

Route::group(['prefix' => 'home'], function () {
	Route::get('/', 'ScheduleController@getHome');
	Route::get('/girls-list','ScheduleController@getGirlList');
	Route::get('/girls-schedule','ScheduleController@getScheduleGirl');
	

});


//////////////////////////////////////////////////////////////////////////////////
//menu1 delivery
Route::group(['prefix' => 'delivery'], function () {
	Route::get('/list', 'DeliveryController@getDelivery');
	Route::get('/detail-delivery', 'DeliveryController@getDetailDelivery');
	Route::get('/edit', 'DeliveryController@getEditDelivery');
	Route::get('/add', 'DeliveryController@getAddDelivery');
});

// Show shift của toàn bộ girl trong 1 tuần
Route::group(['prefix' => 'girls-schedule'], function () {
	Route::get('/list', 'ScheduleGirlController@getSchedule');
	Route::get('/edit', 'ScheduleGirlController@getEditSchedule');
	Route::get('/add', 'ScheduleGirlController@getAddSchedule');
});

// showAppointment hiển thị tất cả các cuộc hẹn đã được băt đầu
Route::group(['prefix' => 'girls-appointment'], function () {
	Route::get('/list', 'ShowAppointmentController@getAppointment');
	Route::get('/detail-appointment', 'ShowAppointmentController@getDetailAppointment');
	Route::get('/edit', 'ShowAppointmentController@getEditAppointment');
	Route::get('/add', 'ShowAppointmentController@getAddAppointment');
});
// quản lý girl
Route::group(['prefix' => 'girls'], function () {
	Route::get('/list', 'GirlController@getListGirl');
	Route::get('/detail-girl', 'GirlController@getDetailGirl');
	Route::get('/edit', 'GirlController@getEditGirl');
	Route::get('/add', 'GirlController@getAddGirl');
});

//Cập nhật tình trạng mới quan hệ giữa girl và user (update relationship)
Route::group(['prefix' => 'manager'], function () {
	Route::get('/update', 'ManagerRelationshipController@getManagerRela');

});




/////////////////////////////////////////////////////////////////////////////////////////


//menu2
Route::group(['prefix' => 'user'], function () {
	Route::get('/user-list', 'Menu2Controller@getUserList');
	Route::get('/user-up', 'Menu2Controller@getUserUp');
	
});


//login

Route::get('login', 'RegisterController@login');
Route::post('login', 'RegisterController@postLogin');
Route::get('logout', 'RegisterController@logout');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
