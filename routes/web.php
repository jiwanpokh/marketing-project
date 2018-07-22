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

