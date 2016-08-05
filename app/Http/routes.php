<?php

use App\Task;
use Illuminate\Http\Request;

Route::get('/', 'GurlhomeController@showGurl');

Route::post('/task', 'GurlpostController@addUrl');

Route::delete('/task/{task}', 'GurldeleteController@delUrl');


//display url info
Route::get('/urlinfo/{id}', 'UrlinfoController@displayInfo');

//redirect
Route::get('/{id}', 'UrlredirController@redirUrl');
