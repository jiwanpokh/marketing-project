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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin','MarketingContoller@index');
Route::get('marketing','MarketingContoller@create');
Route::get('delaylist','MarketingContoller@destroy');
Route::get('project','MarketingContoller@project');
Route::get('crm','MarketingContoller@crm');
Route::post('crmdb','dataController@crmdb');
Route::get('crmview','dataController@crmview');
Auth::routes();
Route::get('/marketing','MarketingFormController@formfield')->middleware('auth');
Route::post('/marketing','MarketingFormController@marketingform')->name('form');
Route::post('test','TestController@testform');
Route::get('clients','MarketingFormController@clients');
Route::get('potentialclientdata','MarketingFormController@potentialclients');

Route::get('edit/{id}','MarketingFormController@edit');
Route::post('edit/{id}','MarketingFormController@edited')->name('edit');
Route::get('delete/{id}','MarketingFormController@delete')->name('delete');

Route::get('edit1/{id}','dataController@edit')->name('edit1');
Route::get('delete1/{id}','dataController@delete')->name('delete1');