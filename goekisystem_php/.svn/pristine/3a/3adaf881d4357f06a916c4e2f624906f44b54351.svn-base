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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'RevenueController@index');
    Route::post('/', 'RevenueController@index');

    Route::group(['prefix' => 'revenue'], function () {
        Route::get('/', 'RevenueController@index');
        Route::get('/getClient', 'RevenueController@getClient');
        Route::get('/getSaleMonth', 'RevenueController@getSaleMonth');
        Route::post('/getSaleDay', 'RevenueController@getSaleDay');
    });
    Route::group(['prefix' => 'daily_statistic'], function () {
        Route::get('/', 'DailyStatisticController@index');
        Route::get('/getGirlBackAfter', 'DailyStatisticController@getGirlBackAfter');
        Route::get('/getGirlBackAfterTotal', 'DailyStatisticController@getGirlBackAfterTotal');
        Route::get('/downExcel', 'DailyStatisticController@downExcel');
        Route::get('/updateFlg', 'DailyStatisticController@updateFlg');
        Route::get('/SaveData', 'DailyStatisticController@SaveData');
    });

    Route::group(['prefix' => 'fetiminity'], function () {
        Route::get('/', 'FetiminityController@index');
        Route::post('/addNew', 'FetiminityController@addNew');
        Route::post('/Edit', 'FetiminityController@Edit');
        Route::get('/Delete', 'FetiminityController@Delete');
        Route::post('/UploadImg', 'FetiminityController@UploadImg');
    });

    Route::group(['prefix' => 'staff'], function () {
        Route::get('/', 'StaffController@index');
        Route::post('/addNew', 'StaffController@addNew');
        Route::post('/Edit', 'StaffController@Edit');
        Route::get('/Delete', 'StaffController@Delete');
        Route::post('/UploadImg', 'StaffController@UploadImg');
    });

    Route::group(['prefix' => 'client'], function () {
        Route::get('/', 'ClientController@index');
        Route::post('/addNew', 'ClientController@addNew');
        Route::post('/update', 'ClientController@updateClient');
        Route::get('/delete', 'ClientController@deleteClient');
        Route::get('/available', 'ClientController@Available');
    });
});
//Route::group(['middleware' => 'auth'], function () {
//    Route::group(['prefix' => 'revenue'], function () {
//        Route::get('/', 'RevenueController@index');
//    });
//    Route::get('/', 'WelcomeController@index');
//    Route::get('home', 'HomeController@index');
//});
/*login*/
Route::post('login', 'RegisterController@postLogin');
Route::get('login', 'RegisterController@login');
Route::get('logout', 'RegisterController@logout');

//Route::get('login/by_ex/{id}', ['middleware' => 'cors', function($id){
//    return App::call('App\Http\Controllers\RegisterController@autoLogin', ['id' => $id]
//    );
//}]);
//
//Route::get('/pass', function (){
//    dd(Hash::make('123456'));
//    return view('auth.login');
//});
