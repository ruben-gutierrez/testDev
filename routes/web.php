<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['as' => 'home' , 'uses' => 'PagesController@home']);

Route::get('trabajo', ['as' => 'work', 'uses' => 'PagesController@work']);
Route::post('/', 'PagesController@create')-> name('addActivity');


Route::get('informe/{name?}', [ 'as' => 'inform', 'uses'  => 'PagesController@inform'])-> where('name', "[A-Za-z]+");


Route::get('/newUser', [ 'as' => 'newUser', 'uses'  => 'PagesController@newUser']);




