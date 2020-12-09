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





Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('SectorDetails/{id}', 'AllShowController@SectorDetail')->name('Sectordetail');
Route::get('MinisterDetails/{id}', 'AllShowController@MinisterDetail')->name('Ministerdetail');
Route::get('AllMinisters', 'AllShowController@AllMinisters')->name('AllMinister');
Route::get('AllSectors', 'AllShowController@AllSectors')->name('AllSector');
Route::get('About', 'AllShowController@About')->name('abouts');


Route::group([ 'as'=>'admin.', 'prefix'=>'admin' , 'namespace'=>'Admin', 'middleware'=>['auth','admin']],
function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('MinistrySectors', 'MinistrySectorController');
	Route::resource('Ministers', 'MinistersController');



});





