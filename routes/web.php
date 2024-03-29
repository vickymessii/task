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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'company', 'as' => 'company:'], function () {
        Route::get('index', 'CompanyController@index')->name('index');
        Route::get('create', 'CompanyController@create')->name('create');
        Route::post('store', 'CompanyController@store')->name('store');
        Route::get('show/{company}', 'CompanyController@show')->name('show');
        Route::get('edit/{company}', 'CompanyController@edit')->name('edit');
        Route::post('update/{company}', 'CompanyController@update')->name('update');
        Route::get('destroy/{company}', 'CompanyController@destroy')->name('destroy');
      });
    
      Route::group(['prefix' => 'employee', 'as' => 'employee:'], function () {
        Route::get('index', 'EmployeeController@index')->name('index');
        Route::get('create', 'EmployeeController@create')->name('create');
        Route::post('store', 'EmployeeController@store')->name('store');
        Route::get('show/{employee}', 'EmployeeController@show')->name('show');
        Route::get('edit/{employee}', 'EmployeeController@edit')->name('edit');
        Route::post('update/{employee}', 'EmployeeController@update')->name('update');
        Route::get('destroy/{employee}', 'EmployeeController@destroy')->name('destroy');
      }); 
});
});
Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

