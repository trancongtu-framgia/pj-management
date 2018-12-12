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

Route::get('/', 'PageController@home');
Route::get('subject/create', 'SubjectController@showCreateForm');
Route::post('subject/create', 'SubjectController@create');
Route::get('subject', 'SubjectController@getAllSubjects');
Route::get('group/create', 'GroupController@showCreateForm');
Route::post('group/create', 'GroupController@create');
