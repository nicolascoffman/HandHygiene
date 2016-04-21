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

Route::get('observe', 'Observation@index')->name('observe');

Route::post('observe', 'Observation@gotWhatever')->name('submitted');

Route::post('edit', 'Edit@postCurrent')->name('edit.current');

Route::controller('edit', 'Edit', [
    'anyData'  => 'edit.data',
    'getIndex' => 'edit',
]);

Route::controller('dataz', 'DatatablesController', [
    'anyData'  => 'dataz.data',
    'getIndex' => 'dataz'
]);


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
    //
});
