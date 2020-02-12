<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', ['as' => 'login', 'uses' => function() {
    return view('login');
}]);
Route::group(['middleware' => 'auth','prefix' => 'dashboard', 'as' => 'dashboard'], function() {
    Route::get('/', 'DashBoardController@index');
    Route::post('/newEvent', 'EventsController@store');
    Route::get('/event/{id}', 'EventsController@show');
    Route::post('/event/edit/{id}', 'EventsController@update');
});
Route::post('/organizers/login', 'OrganizerController@login');
Route::get('/loginerror', function() {
    return view('loginerror');
});
Route::get('/logout', 'OrganizerController@logout');