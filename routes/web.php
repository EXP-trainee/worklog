<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('memberlogin','MemberController@getLogin')->name('memberlogin');
Route::post('memberlogin', 'MemberController@postLogin')->name('memberlogin');
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

Route::group(['prefix'=>'member','middleware'=>'memberlogin'],function(){
    Route::get('index.html','MemberController@index')->name('index');
    Route::get('update.html','MemberController@update')->name('update');
});



Route::get('/', function () {
    return view('welcome');
});
