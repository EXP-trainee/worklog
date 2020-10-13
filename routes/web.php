<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('dbusers', 'UserController');
    Route::resource('KPI', 'WorklogKPIController');
    Route::resource('position', 'WorklogPositionController');
    Route::resource('report', 'WorklogReportController');
    Route::resource('users', 'WorklogUserController');
});



Route::get('/', function () {
    return view('welcome');
});
