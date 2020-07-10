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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/branch','BranchController');
Route::get('/branch/show','BranchController@show')->name('branch.show');
Route::delete('/branch/delete','BranchController@destroy')->name('branch.destroy');
Route::get('branch_edit','BranchController@b_edit');
Route::post('/branch/update','BranchController@update')->name('branch.update');


//EmployeeCategory Route



  Route::resource('/employeeCategorys','EmployeeCategoryController');
  Route::get('employeeCategorys/show','EmployeeCategoryController@show')->name('employeeCategorys.show');
  Route::delete('employeeCategorys/delete','EmployeeCategoryController@destroy')->name('employeeCategorys.destroy');
  Route::get('employeeCategorys_edit','EmployeeCategoryController@cat_edit');
  Route::post('employeeCategorys/update','EmployeeCategoryController@update')->name('employeeCategorys.update');
