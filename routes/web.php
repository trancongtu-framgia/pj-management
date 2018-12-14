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
    Route::get('/{id}/detail', 'GroupController@show');
});

Route::group(['prefix' => 'task'], function() {
    Route::get('{id}/create', 'TaskController@showUploadForm');
    Route::post('{id}/create', 'TaskController@upload');
    Route::get('/', 'TaskController@getAll');
    Route::get('{id}/delete', 'TaskController@delete');
});

Route::group(['prefix' => 'exercise'], function() {
    Route::get('/', 'ExerciseController@getAll');
    Route::get('/create', 'ExerciseController@showCreateForm');
    Route::post('/create', 'ExerciseController@create');
    Route::get('{id}/detail', 'ExerciseController@show');
});
