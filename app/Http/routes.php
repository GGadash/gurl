<?php

use App\UrlMapping;
use Illuminate\Http\Request;

Route::get('/', 'GurlhomeController@showGurl');

Route::post('/urlmapping', 'GurlpostController@addUrl');

Route::delete('/urlmapping/{urlmapping}', 'GurldeleteController@delUrl');


//display url info
Route::get('/urlinfo/{id}', 'UrlinfoController@displayInfo');

//redirect
Route::get('/{id}', 'UrlredirController@redirUrl');
