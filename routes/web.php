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
//  show page
Route::get('pages', 'PageController@show');

Route::post('pagesstore', 'PageController@store');

Route::get('pages/{page}', 'PageController@onepage');

Route::get('pages/{page}/delete', 'PageController@delete');
Route::get('pages/{page}/deleteall', 'PageController@deleteall');

///////////////////////////////////////////////////////////////////
Route::post('pages/{page}/notesstore', 'NoteController@store');

Route::get('notes/{note}/edit', 'NoteController@edit');
Route::post('notes/{note}/update', 'NoteController@update');

Route::get('notes/{note}/delete', 'NoteController@delete');