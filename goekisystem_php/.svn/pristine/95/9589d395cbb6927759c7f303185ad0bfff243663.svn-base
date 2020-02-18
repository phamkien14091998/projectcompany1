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

    Route::group(['prefix' => 'home'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/add', 'HomeController@addUser');
        Route::post('/add_user', 'HomeController@addUserList');
        Route::get('/detail/{id}', 'HomeController@detailUser');
        Route::get('/detail_user/{id}', 'HomeController@detailUserForm');
        Route::post('/updateUser', 'HomeController@updateUserInfo');
        Route::get('/delete/{id}', 'HomeController@deleteUser');
        Route::get('/star_level/{id}', 'HomeController@rankUser');
        Route::post('/updateStar', 'HomeController@updateRankUser');
    });

    Route::group(['prefix' => 'message'], function () {
        Route::get('/', 'MessageController@index');
        Route::get('/detail/{id}', 'MessageController@detailMsg');
        Route::post('/update', 'MessageController@updateMsg');
        Route::post('/delete/{id}', 'MessageController@deleteMsg');
    });

    Route::group(['prefix' => 'recommend'], function () {
        Route::get('/', 'RecommendController@index');
        Route::get('/detail/{id}/{client_cd}', 'RecommendController@detailRecommend');
        Route::get('/add', 'RecommendController@add');
        Route::post('/add_User', 'RecommendController@addUser');
        Route::post('/info_user', 'RecommendController@ajaxGetInfoUser');
        Route::post('/getListGirl', 'RecommendController@getListGirl');
        Route::post('/update', 'RecommendController@updateRecommend');
        Route::get('/delete/{id}', 'RecommendController@deleteRecommend');
    });

    Route::group(['prefix' => 'operator'], function () {
        Route::get('/', 'OperatorController@index');
        Route::post('/list_staff', 'OperatorController@ajaxGetInfoStaff');
    });

    Route::group(['prefix' => 'girl'], function () {
        Route::get('/', 'GirlController@index');
        Route::get('/add', 'GirlController@add');
        Route::post('/add_girl', 'GirlController@addGirl');
        Route::get('/detail/{id}', 'GirlController@detail');
        Route::post('/update_girl', 'GirlController@updateGirl');
        Route::get('/delete/{id}', 'GirlController@deleteGirl');
    });


    Route::get('/', 'HomeController@index');
    Route::post('/', 'HomeController@index');

});

Route::post('login', 'RegisterController@postLogin');
Route::get('login', 'RegisterController@login');
Route::get('logout', 'RegisterController@logout');


Route::get('/clear_cache', function() {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
});
