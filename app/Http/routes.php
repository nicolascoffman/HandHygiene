<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

   Route::auth();


    Route::get('dashboard', 'Dashboard@index')->name('dashboard');

    Route::get('analyze', 'Analyze@index')->name('analyze');


    Route::get('observe', 'Observation@index')->name('observe');
    Route::post('observe', 'Observation@gotWhatever')->name('submitted');

    Route::get('edit', 'Edit@getIndex')->name('edit');
    Route::post('edit', 'Edit@postCurrent')->name('edit.current');


    Route::get('userdata', 'userData@datatable')->name('data.user');
    Route::get('observationdata', 'observationData@datatable')->name('data.observation');
    Route::get('hpdata', 'hpData@datatable')->name('data.healthcareprofessional');
    Route::get('locationdata', 'locationData@datatable')->name('data.location');
    Route::get('momentdata', 'momentData@datatable')->name('data.moment');
    Route::get('resultdata', 'resultData@datatable')->name('data.result');
    Route::get('reasondata', 'reasonData@datatable')->name('data.reason');
});



Route::get('/home', 'HomeController@index');
