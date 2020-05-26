<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 
// Turns
Route::get('turns', 'TurnsController@index');
 
Route::get('turns/{turn}', 'TurnsController@show');
 
Route::post('turns','TurnsController@store');
 
Route::put('turns/{turn}','TurnsController@update');
 
Route::delete('turns/{turn}', 'TurnsController@delete');

// Users
Route::get('users', 'UsersController@index');
 
Route::get('users/{user}', 'UsersController@show');
 
Route::post('users','UsersController@store');
 
Route::put('users/{user}','UsersController@update');
 
Route::delete('users/{user}', 'UsersController@delete');

// Concepts
Route::get('concepts', 'ConceptsController@index');
 
Route::get('concepts/{concept}', 'ConceptsController@show');
 
Route::post('concepts','ConceptsController@store');
 
Route::put('concepts/{concept}','ConceptsController@update');
 
Route::delete('concepts/{concept}', 'ConceptController@delete');

Route::get('concepts/{concept}/queues', 'ConceptsController@getAllQueues');

Route::get('concepts/{concept}/queues/{queue}', 'ConceptsController@showQueue');
 
Route::post('concepts/{concept}/queues','ConceptsController@storeQueue');
 
Route::put('concepts/{concept}/queues/{queue}','ConceptsController@updateQueue');
 
Route::delete('concepts/{concept}/queues/{queue}', 'ConceptsController@deleteQueue');
// Queue
//Route::get('concepts/{concept}/queues', 'QueueController@index');
 
//Route::get('concepts/{concept}/queues/{queue}', 'QueueController@show');
 
//Route::post('concepts/{concept}/queues','QueueController@store');
 
//Route::put('concepts/{concept}/queues/{queue}','QueueController@update');
 
//Route::delete('concepts/{concept}/queues/{queue}', 'QueueController@delete');
