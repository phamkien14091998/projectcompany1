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
        Route::get('/add', 'HomeController@add');
        Route::post('/add_girl', 'HomeController@addGirl');
        Route::get('/detail/{id}', 'HomeController@detailGirl');
        Route::get('/delete/{id}', 'HomeController@delete');
        Route::post('/update', 'HomeController@update1');
        Route::post('/update_area', 'HomeController@updateArea');
        Route::post('/update_2', 'HomeController@update2');
        Route::post('/update_4', 'HomeController@update4');
        Route::post('/update_5', 'HomeController@update5');
        Route::post('/update_3', 'HomeController@update3');
        Route::get('/girl_img/{id}', 'HomeController@girlImg');
        Route::post('/update_img', 'HomeController@uploadImg');
        Route::get('/delete_img/{id}', 'HomeController@deleteImg');
        Route::get('/girl_diary/{id}', 'HomeController@girlDiary');
        Route::post('/girl_diary_update', 'HomeController@girlDiaryUpdate');
        Route::get('/girlContents', 'HomeController@girlDiaryContents');
        Route::get('/girlShowImg', 'HomeController@girlShowImg');
        Route::get('/girlYusen/{id}', 'HomeController@girlYusen');
        Route::post('/girlYusenUpdate', 'HomeController@girlYusenUpdate');
        Route::get('/girlSite/{id}', 'HomeController@girlSite');
        Route::get('/girlInfo', 'HomeController@girlSiteInfo');
        Route::post('/girlSiteUpdate', 'HomeController@girlSiteUpdate');
        Route::post('/girlSiteDelete', 'HomeController@girlSiteDelete');
    });

    Route::group(['prefix' => 'imgArea'], function () {
        Route::get('/', 'ImgAreaController@index');
        Route::get('/detail/{id}', 'ImgAreaController@detailArea');
        Route::post('/update', 'ImgAreaController@updateImgArea');
    });

    Route::group(['prefix' => 'syukinWeek'], function () {
        Route::get('/', 'SyukinWeekController@index');
        Route::get('/detail/{id}', 'SyukinWeekController@detailArea');
        Route::post('/updateWeek', 'SyukinWeekController@updateSyukin');
        Route::get('/delete/{id}', 'SyukinWeekController@deleteSyukin');
    });

    Route::group(['prefix' => 'newInfo'], function () {
        Route::get('/', 'NewInfoController@index');
        Route::get('/add', 'NewInfoController@add');
        Route::post('/add_new', 'NewInfoController@addNew');
        Route::get('/detail/{id}', 'NewInfoController@detail');
        Route::post('/update', 'NewInfoController@updateInfo');
        Route::get('/delete/{id}', 'NewInfoController@delete');
    });

    Route::group(['prefix' => 'mobilePickup'], function () {
        Route::get('/', 'MobilePickupController@index');
        Route::post('/update', 'MobilePickupController@update');
    });

    Route::group(['prefix' => 'manageVoice'], function () {
        Route::get('/', 'ManageVoiceController@index');
        Route::get('/add', 'ManageVoiceController@add');
        Route::post('/add_girl', 'ManageVoiceController@addGirl');
        Route::get('/detail/{id}', 'ManageVoiceController@detail');
        Route::post('/update', 'ManageVoiceController@update');
        Route::get('/delete/{id}', 'ManageVoiceController@delete');
    });

    Route::group(['prefix' => 'ranking'], function () {
        Route::get('/', 'RankingController@index');
        Route::post('/update', 'RankingController@update');
    });

    Route::group(['prefix' => 'option'], function () {
        Route::get('/', 'OptionController@index');
        Route::post('/addForm', 'OptionController@addForm');
        Route::post('/addFormName', 'OptionController@addFormName');
        Route::post('/add', 'OptionController@add');
        Route::post('/addName', 'OptionController@addName');
        Route::post('/detail/{id}', 'OptionController@detail');
        Route::post('/detail_name/{id}', 'OptionController@detailName');
        Route::post('/update', 'OptionController@update');
        Route::post('/updateName', 'OptionController@updateName');
        Route::get('/delete/{id}', 'OptionController@delete');
        Route::get('/deleteName/{id}', 'OptionController@deleteName');
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
