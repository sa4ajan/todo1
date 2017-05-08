<?php

use Illuminate\Http\Request;

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
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => ['auth:api']], function () {
   //view
Route::get('/todo/{id}' ,'todoController@show');

//index
Route::get('/todo' , 'todoController@index');

//add
Route::post('/todo' ,'todoController@create');

//post
Route::get('/todo/task','todoController@read');

//update
Route::put('todo/{id}' ,'todoController@update');

//delete
Route::delete('todo/{id}' ,'todoCOntroller@delete');
});







//Route::get('/logout' ,'loginController@logout');
Route::post('/login' ,'loginController@login');
Route::post('/register' , 'registerController@store');


