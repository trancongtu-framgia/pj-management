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
Route::group(['prefix' => 'subject'], function() {
    Route::get('/create', 'SubjectController@showCreateForm');
    Route::post('/create', 'SubjectController@create');
    Route::get('/', 'SubjectController@getAllSubjects');
});

Route::group(['prefix' => 'group'], function() {
    Route::get('create', 'GroupController@showCreateForm');
    Route::post('create', 'GroupController@create');
    Route::get('/', 'GroupController@getAllGroups');
});
