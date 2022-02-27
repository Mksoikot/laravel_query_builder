<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','RetrieveController@selectAllRow');
Route::get('/onerow','RetrieveController@selectOneRow');
Route::get('/findrow','RetrieveController@findRow');
Route::get('/onecolumn','RetrieveController@selectOneColumn');
Route::get('/mcolumn','RetrieveController@selectMulticolumn');
Route::get('/singledata','RetrieveController@spacificData');




Route::get('/agg','AggregatesController@avgRow');
// Route::get('/onecolumn','RetrieveController@selectOneColumn');
// Route::get('/mcolumn','RetrieveController@selectMulticolumn');
// Route::get('/singledata','RetrieveController@spacificData');

Route::get('/unique','selectController@uniqueSelect');
Route::get('/single','selectController@singlecolumnSelect');
Route::get('/multi','selectController@multicolumnSelect');


Route::get('/merge','margeController@margeData');

Route::get('/join','joinController@RightJoinData');


Route::get('/insert','InsertController@InsertRow');

Route::get('/delete','DeleteController@onDelete');

Route::get('/update','UpdateController@onUpdate');
