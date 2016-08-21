<?php

use App\UrlMapping;
use Illuminate\Http\Request;


Route::get('/{id}', 'UrlredirController@redirUrl');


Route::get('/', 'GurlmapController@showGurl');

Route::post('/urlmapping', 'GurlmapController@addUrl');

Route::delete('/urlmapping/{urlmapping}', 'GurlmapController@delUrl');

Route::get('/urlinfo/{id}', 'GurlmapController@displayInfo');

