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

  Route::get('/', function () {
      return view('welcome');
  });

   Route::auth();


    Route::get('dashboard', 'Dashboard@index')->name('dashboard');

    Route::get('analyze', 'Analyze@index')->name('analyze');



    Route::get('observe', 'Observation@index')->name('observe');
    Route::post('observe', 'Observation@gotWhatever')->name('submitted');

  Route::get('nice', 'Observation@nice')->name('nice');

    Route::get('edit', 'Edit@getIndex')->name('edit');
    Route::post('edit', 'Edit@postCurrent')->name('edit.current');
    Route::get('editor/{table}/{id}', 'Edit@editMaker')->name('editor');
    Route::post('update', 'Edit@updater')->name('updater');
    Route::post('delete', 'Edit@delete')->name('delete');
    //Route::get('editor/{table}', ['as' => 'scopes.index', 'uses' => 'ScopeController@index']);

    Route::get('userdata', 'userData@datatable')->name('data.user');
    Route::get('observationdata', 'observationData@datatable')->name('data.observation');
    Route::get('hpdata', 'hpData@datatable')->name('data.healthcareprofessional');
    Route::get('locationdata', 'locationData@datatable')->name('data.location');
    Route::get('momentdata', 'momentData@datatable')->name('data.moment');
    Route::get('resultdata', 'resultData@datatable')->name('data.result');
    Route::get('reasondata', 'reasonData@datatable')->name('data.reason');
});



Route::get('/home', 'HomeController@index');
