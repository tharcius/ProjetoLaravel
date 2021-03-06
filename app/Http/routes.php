<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', 'ClientController@index');
Route::post('/client', 'ClientController@store');
Route::get('/client/{id}', 'ClientController@show');
Route::delete('/client/{id}', 'ClientController@destroy');
Route::put('/client/{id}', 'ClientController@update');

Route::get('/project/{id}/members', 'ProjectController@members');

Route::get('/project/{id}/tasks', 'ProjectController@tasks');
Route::post('/project/{id}/tasks', 'ProjectTaskController@store');
Route::put('/project/{id}/tasks/{taskId}', 'ProjectTaskController@update');
Route::get('/project/{id}/tasks/{taskId}', 'ProjectTaskController@show');
Route::delete('/project/{id}/tasks/{taskId}', 'ProjectTaskController@destroy');

Route::get('/project', 'ProjectController@index');
Route::post('/project', 'ProjectController@store');
Route::get('/project/{id}', 'ProjectController@show');
Route::delete('/project/{id}', 'ProjectController@destroy');
Route::put('/project/{id}', 'ProjectController@update');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
