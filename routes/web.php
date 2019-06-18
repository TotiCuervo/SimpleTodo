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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');


//-------Tasks---------
//create Task
Route::get('/lists/{list}/task', 'TaskController@create');
Route::post('/lists/{list}/task', 'TaskController@store');

//edit Task
Route::get('/lists/{list}/task/{task}/edit', 'TaskController@edit')->name('edit.task');
Route::patch('/task/{task}', 'TaskController@update');

//delete Task
Route::delete('tasks/{task}', "TaskController@destroy");

//toggle completed Task
Route::patch('/task/{task}/complete', "TaskController@complete");
//----------------------

Route::resource('lists', 'ToDoController');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
