<?php

use App\UrlMapping;
use Illuminate\Http\Request;


Route::get('/', 'GurlhomeController@showGurl');

Route::post('/urlmapping', 'GurlpostController@addUrl');

Route::delete('/urlmapping/{urlmapping}', 'GurldeleteController@delUrl');

Route::get('/urlinfo/{id}', 'UrlinfoController@displayInfo');

Route::get('/{id}', 'UrlredirController@redirUrl');
