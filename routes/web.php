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

Route::get('/', function () {
    return view('homepage');
});


// Routes related to Supervisor
Route::get('/supervisor', 'supervisorController@index');
Route::get('/supervisor/create', 'supervisorController@create');
Route::post('/supervisor', 'supervisorController@store');
Route::get('/titleinfosv/{titleinfo}', 'supervisorController@show');
Route::delete('/supervisor/{titleinfo}', 'supervisorController@destroy');
Route::get('/titleinfosv/{titleinfo}/edit', 'supervisorController@edit');
Route::patch('/supervisor/{titleinfo}', 'supervisorController@update');


// Routes related to COORDINATOR

Route::get('/coordinator', 'coordinatorController@index');
Route::get('/coordinator/alltitle', 'coordinatorController@alltitle');
Route::get('/titleinfos/{titleinfo}', 'coordinatorController@show');
Route::post('/titleinfos/{titleinfo}', 'coordinatorController@show');
Route::patch('/titleinfos/{titleinfo}', 'coordinatorController@update');
Route::put('/coordinatoraccept/{titleinfo}', 'coordinatorController@acceptbtn');
Route::put('/coordinatorreject/{titleinfo}', 'coordinatorController@rejectbtn');